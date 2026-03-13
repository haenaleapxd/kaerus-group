<?php
/**
 * Editor setup.
 *
 * @package Leap Editor
 */

/**
 * Check installed theme version
 *
 * @since 1.3.0
 * @param string $compare eg. >=.
 * @param string $ver Theme version to check.
 * @param bool   $parent Check parent theme otherwise check child theme.
 * @return bool theme is greater than version.
 */
function xd_theme_version_compare( $compare, $ver, $parent = true ) {

	$template   = get_template();
	$stylesheet = get_stylesheet();

	if ( ! $parent && $template === $stylesheet ) {
		// When there is no child theme and we're attempting to check the child theme assume the parent theme is older.
		return false;
	}

	$theme_version = wp_get_theme( $parent ? get_template() : get_stylesheet() )->get( 'Version' );
	if ( strpos( $ver, '<' ) !== false && preg_match( '/201[7-9]/', $theme_version ) ) {
		return true;
	}
	return version_compare( $theme_version, $ver, $compare );

}

/**
 * Checks to see if any array keys are not integers or not sequential.
 * Arrays with non-sequential or non-numeric keys will json encode as objects
 *
 * @param array $array the array to check.
 */
function xd_is_associative_array( $array = null ) {
	if ( ! is_array( $array ) ) {
		return false;
	}
	$sequential = array_values( $array );
	$intersect  = array_intersect_key( $array, $sequential );
	return( count( $intersect ) !== count( $array ) );
}

/**
 * Php port of https://github.com/JedWatson/classnames.
 */
function xd_classnames() {
	$classes          = array();
	$arguments        = func_get_args();
	$arguments_length = count( $arguments );
	for ( $i = 0; $i < $arguments_length; $i++ ) {
		$arg = $arguments[ $i ];
		if ( ! $arg ) {
			continue;
		}
		if ( is_scalar( $arg ) ) {
			$classes = array_merge( $classes, explode( ' ', $arg ) );
		} elseif ( is_array( $arg ) ) {
			if ( count( $arg ) ) {
				if ( xd_is_associative_array( $arg ) ) {
					foreach ( $arg as $key => $val ) {
						if ( is_int( $key ) && $val ) {
							$classes[] = $val;
						} elseif ( $val ) {
							$classes[] = $key;
						}
					}
				} else {
					$inner = xd_classnames( ...$arg );
					if ( $inner ) {
						$classes[] = $inner;
					}
				}
			}
		}
	}
	return join( ' ', array_unique( $classes ) );
}

/**
 * Convert string to camelCased string
 *
 * @param string $string string to convert.
 */
function xd_camel_case( $string ) {
	foreach ( array( '-', '_', '/' ) as $delimiter ) {
		$string = lcfirst( str_replace( $delimiter, '', ucwords( $string, $delimiter ) ) );
	}
	return $string;
}

/**
 * Convert string to snake_cased string
 *
 * @param string $string string to convert.
 */
function xd_snake_case( $string ) {
	$string = strtolower( preg_replace( '/([a-z])([A-Z])/', '$1_$2', $string ) );
	foreach ( array( '_', '-', '/' ) as $delimiter ) {
		$string = str_replace( $delimiter, '_', $string );
	}

	return $string;
}

/**
 * Convert string to kebab-cased string
 *
 * @param string $string string to convert.
 */
function xd_kebab_case( $string ) {
	return str_replace( '_', '-', xd_snake_case( $string ) );
}

/**
 * Recursively get a list of files in directory.
 *
 * @param string $directory Directory location.
 */
function get_files( $directory ) {
	$dir = opendir( $directory );
	$tmp = array();
	if ( $dir ) {

		$file = readdir( $dir );
		while ( $file ) {
			if ( '.' !== $file && '..' !== $file && '.' !== $file[0] ) {
				if ( false === strpos( $file, '.twig' ) && false === strpos( $file, '.php' ) ) {
					$tmp2 = get_files( $directory . $file . DIRECTORY_SEPARATOR );
					$tmp  = array_merge( $tmp, $tmp2 );
				} else {
					array_push( $tmp, $directory . $file );
				}
			}
			$file = readdir( $dir );
		}
		closedir( $dir );
	}
	return $tmp;
}

/**
 * Recursively get a list of files in directory.
 *
 * @param string $folder Directory location.
 * @param string $reg_pattern Regex pattern.
 */
function xd_file_search( $folder, $reg_pattern ) {
	$dir       = new RecursiveDirectoryIterator( $folder );
	$ite       = new RecursiveIteratorIterator( $dir );
	$files     = new RegexIterator( $ite, $reg_pattern, RegexIterator::GET_MATCH );
	$file_list = array();
	foreach ( $files as $file ) {
			$file_list = array_merge( $file_list, $file );
	}
	return $file_list;
}

/**
 * Recursively merge arrays without replacing numeric keys
 *
 * @param array   $array1 first array.
 * @param boolean $merge_variations array.
 * @param array   ...$arrays additional arrays.
 */
function xd_merge_block_settings( $array1, $merge_variations = false, ...$arrays ) {
	if ( is_array( $merge_variations ) ) {
		$arrays = array( $merge_variations );
	}
	$merged = $array1;
	foreach ( $arrays as $array ) {
		foreach ( $array as $key => $value ) {
			if ( is_array( $value ) && isset( $merged[ $key ] ) && is_array( $merged[ $key ] ) ) {
				if ( xd_is_associative_array( $value ) ) {
					$merged[ $key ] = xd_merge_block_settings( $merged[ $key ], $value );
				} elseif ( $merge_variations && 'variations' === $key ) {
					$merge_variations = array_column( $merged[ $key ], null, 'name' );
					$value_variations = array_column( $value, null, 'name' );
					foreach ( $value_variations as $variation ) {
						if ( isset( $merge_variations[ $variation['name'] ] ) ) {
							$merge_variations[ $variation['name'] ] = xd_merge_block_settings( $merge_variations[ $variation['name'] ], $variation );
						} else {
							$merge_variations[ $variation['name'] ] = $variation;
						}
						$value = array_values( $merge_variations );
					}
					$merged[ $key ] = $value;
				} else {
					$merged[ $key ] = $value;
				}
			} else {
				if ( is_int( $key ) ) {
					$merged[] = $value;
				} else {
					$merged[ $key ] = $value;
				}
			}
		}
	}
	return $merged;
}

/**
 * Export an array to PHP code using array() syntax, preserving associative keys, omitting numeric keys.
 *
 * @param mixed  $value  The value to export.
 * @param string $indent (Optional) Current indentation for pretty output.
 * @return string
 */
function xd_export_blocks_array( $value, $indent = '' ) {
	if ( is_array( $value ) ) {
		$is_assoc = array_keys( $value ) !== range( 0, count( $value ) - 1 );
		$output   = "array(\n";

		foreach ( $value as $key => $sub_value ) {
			$output .= $indent . "\t";

			if ( $is_assoc ) {
				//phpcs:ignore
				$output .= var_export( $key, true ) . ' => ';
			}

			$output .= xd_export_blocks_array( $sub_value, $indent . "\t" ) . ",\n";
		}

		return $output . $indent . ')';
	}

	//phpcs:ignore
	return var_export( $value, true );
}

/**
 * Collect all possible tokens from a feature's supports value (block.json),
 * ignoring any `when` conditions. Also detects a wildcard (supports === true or
 * any unconditional `true` overlay) to mean "all tokens allowed".
 *
 * @param mixed $feature_support  Value under supports["xd/feature"] or similar.
 * @return array{tokens: string[], wildcard: bool}
 */
function xd_collect_possible_tokens( $feature_support ) {
	$tokens   = array();
	$wildcard = false;

	$add = function( $val ) use ( &$add, &$tokens, &$wildcard ) {
		if ( true === $val ) {
			$wildcard = true;
			return; }

		if ( is_string( $val ) || is_int( $val ) || is_float( $val ) ) {
			$tokens[] = (string) $val;
			return;
		}

		if ( is_array( $val ) ) {
			// list.
			if ( array_keys( $val ) === range( 0, count( $val ) - 1 ) ) {
				foreach ( $val as $v ) {
					if ( true === $v ) {
						$wildcard = true;
						continue;
					}
					if ( is_string( $v ) || is_int( $v ) || is_float( $v ) ) {
						$tokens[] = (string) $v;
					}
				}
				return;
			}
			// assoc with context.
			if ( isset( $val['context'] ) && is_array( $val['context'] ) ) {
				foreach ( $val['context'] as $item ) {
					if ( true === $item ) {
						$wildcard = true;
						continue;
					}
					if ( is_string( $item ) || is_int( $item ) || is_float( $item ) ) {
						$tokens[] = (string) $item;
						continue;
					}
					if ( is_array( $item ) ) {
						if ( array_keys( $item ) === range( 0, count( $item ) - 1 ) ) {
							$add( $item );
							continue;
						}
						if ( isset( $item['supports'] ) ) {
							$add( $item['supports'] ); }
						continue;
					}
				}
			}
		}
	};

	$add( $feature_support );
	$tokens = array_values( array_unique( array_map( 'strval', $tokens ) ) );
	return array(
		'tokens'   => $tokens,
		'wildcard' => $wildcard,
	);
}


/**
 * Normalize an attribute "if" into a flat list of tokens.
 * Accepts string | list<string> | anything else → [].
 *
 * @param string|array $if the "if" attribute value.
 */
function xd_attr_if_tokens( $if ) {
	if ( is_string( $if ) ) {
		return array( $if );
	}
	if ( is_array( $if ) && array_keys( $if ) === range( 0, count( $if ) - 1 ) ) {
		return array_values( array_filter( $if, 'is_string' ) );
	}
	return array();
}

/**
 * Combines two or more arrays with flexible, rule-based merge behavior.
 *
 * This function behaves similarly to `array_replace_recursive()` for associative arrays,
 * but appends lists by default (like your original xd_merge_block_settings()).
 * Merge behavior for specific paths can be customized with per-path rules.
 *
 * ### Default behavior
 * - **Associative arrays:** merged recursively; later values overwrite earlier ones
 *   (same as `array_replace_recursive`).
 * - **Lists (non-associative arrays):** appended together (preserving order and duplicates).
 * - **Scalars or type mismatches:** child value replaces parent.
 *
 * ### Per-path overrides (dot paths supported)
 * | Rule          | Behavior |
 * |---------------|-----------|
 * | `'replace'`   | Replace list entirely (ignore base values). |
 * | `'append'` or `true` | Append lists, preserving duplicates. |
 * | `'unique'`    | Append lists and remove duplicate scalar values. |
 * | `'propName'`  | Merge list of associative items by that property (later items overwrite earlier ones sharing the same property). |
 *
 * ### Examples
 *
 * ```php
 * // Basic append (default)
 * $a = ['a', 'b'];
 * $b = ['b', 'c'];
 * xd_array_combine([], $a, $b);
 * // → ['a', 'b', 'b', 'c']
 *
 * // Unique append
 * $rules = ['tags' => 'unique'];
 * $a = ['tags' => ['news', 'tech']];
 * $b = ['tags' => ['tech', 'arts']];
 * xd_array_combine($rules, $a, $b);
 * // → ['tags' => ['news', 'tech', 'arts']]
 *
 * // Merge list of associative items by property 'name'
 * $rules = ['variations' => 'name'];
 * $a = ['variations' => [
 *     ['name' => 'a', 'color' => 'blue'],
 *     ['name' => 'b', 'color' => 'red'],
 * ]];
 * $b = ['variations' => [
 *     ['name' => 'b', 'size' => 'large'],
 *     ['name' => 'c', 'color' => 'green'],
 * ]];
 * xd_array_combine($rules, $a, $b);
 * // → ['variations' => [
 * //      ['name' => 'a', 'color' => 'blue'],
 * //      ['name' => 'b', 'color' => 'red', 'size' => 'large'],
 * //      ['name' => 'c', 'color' => 'green'],
 * //    ]]
 *
 * // Nested rule using dot paths
 * $rules = [
 *     'supports.color.palette' => 'unique', // Dedupe palette colors
 *     'variations'             => 'name',   // Merge variations by name
 * ];
 * ```
 *
 * ### Typical WordPress use cases
 * - `uses_context` → `'unique'` to append but avoid duplicates.
 * - `variations` → `'name'` to merge variations by unique `name`.
 * - `style_handles` / `editor_style_handles` → `'append'` to collect handles.
 *
 * @param array $merge_rules Merge rules (path => rule or list of paths).
 * @param array $array_1     First array.
 * @param array $array_2     Second array.
 * @param mixed ...$more     Additional arrays to merge.
 * @return array             Merged result.
 */
function xd_array_combine( $merge_rules, $array_1, $array_2, ...$more ) {
	$arrays = array_merge( array( $array_1, $array_2 ), $more );
	$rules  = _xdac_normalize_rules( $merge_rules );

	$result = array_shift( $arrays );
	foreach ( $arrays as $incoming ) {
		$result = _xdac_merge_two( $result, $incoming, $rules, array() );
	}

	return $result;
}

/**
 * Normalize rules into a consistent associative map.
 *
 * @param array $merge_rules Merge rules.
 * @return array Normalized rules.
 */
function _xdac_normalize_rules( $merge_rules ): array {
	if ( ! is_array( $merge_rules ) || ! $merge_rules ) {
		return array();
	}

	$out      = array();
	$is_assoc = xd_is_associative_array( $merge_rules );

	if ( ! $is_assoc ) {
		foreach ( $merge_rules as $path ) {
			$out[ _xdac_normalize_path( $path ) ] = 'append';
		}
		return $out;
	}

	foreach ( $merge_rules as $path => $rule ) {
		$path = _xdac_normalize_path( $path );

		if ( is_array( $rule ) && isset( $rule['by'] ) && is_string( $rule['by'] ) ) {
			$out[ $path ] = $rule['by'];
		} elseif ( true === $rule ) {
			$out[ $path ] = 'append';
		} elseif ( is_string( $rule ) ) {
			$out[ $path ] = $rule;
		} elseif ( 'replace' === $rule || false === $rule ) {
			$out[ $path ] = 'replace';
		}
	}

	return $out;
}

/**
 * Normalize a path string or array into dot notation.
 *
 * @param string|array $path the path.
 */
function _xdac_normalize_path( $path ): string {
	if ( is_array( $path ) ) {
		return implode( '.', $path );
	}
	return trim( (string) $path );
}

/**
 * Retrieve rule for the current nested path.
 *
 * @param array $rules the rules.
 * @param array $path_segments the path segments.
 */
function _xdac_rule_for( array $rules, array $path_segments ) {
	$dot = implode( '.', $path_segments );
	return $rules[ $dot ] ?? null;
}

/**
 * Core recursive merge logic.
 *
 * @param mixed $base base value.
 * @param mixed $incoming incoming value.
 * @param array $rules merge rules.
 * @param array $path_segments current path segments.
 */
function _xdac_merge_two( $base, $incoming, array $rules, array $path_segments ) {
	// Scalars or mismatched types: incoming replaces base.
	if ( ! is_array( $base ) || ! is_array( $incoming ) ) {
		return $incoming;
	}

	$base_is_assoc = xd_is_associative_array( $base );
	$in_is_assoc   = xd_is_associative_array( $incoming );

	// Handle lists (non-associative arrays).
	if ( ! $base_is_assoc || ! $in_is_assoc ) {
		$rule = _xdac_rule_for( $rules, $path_segments );

		if ( 'replace' === $rule ) {
			return $incoming;
		}

		if ( 'append' === $rule || true === $rule ) {
			return array_values( array_merge( array_values( $base ), array_values( $incoming ) ) );
		}

		if ( 'unique' === $rule ) {
			return _xdac_append_unique( $base, $incoming );
		}

		if ( is_string( $rule ) && ! in_array( $rule, array( 'append', 'replace', 'unique' ), true ) ) {
			// Merge list of associative items by property.
			return _xdac_merge_list_by_property( $base, $incoming, $rule );
		}

		// Default list behavior → append (matches xd_merge_block_settings).
		return array_values( array_merge( array_values( $base ), array_values( $incoming ) ) );
	}

	// Associative arrays: merge recursively.
	$out = $base;
	foreach ( $incoming as $key => $value_2 ) {
		if ( array_key_exists( $key, $out ) ) {
			$out[ $key ] = _xdac_merge_two(
				$out[ $key ],
				$value_2,
				$rules,
				array_merge( $path_segments, array( $key ) )
			);
		} else {
			$out[ $key ] = $value_2;
		}
	}

	return $out;
}

/**
 * Append two scalar lists, deduplicating by value.
 *
 * @param array $list_1 first list.
 * @param array $list_2 second list.
 */
function _xdac_append_unique( array $list_1, array $list_2 ): array {
	$out  = array();
	$seen = array();

	$push = function( $item ) use ( &$out, &$seen ) {
		if ( ! is_array( $item ) ) {
			$key = is_bool( $item ) ? ( $item ? '1' : '0' ) : (string) $item;
			if ( isset( $seen[ $key ] ) ) {
				return;
			}
			$seen[ $key ] = true;
			$out[]        = $item;
		} else {
			$out[] = $item; // Never dedupe arrays.
		}
	};

	foreach ( $list_1 as $item ) {
		$push( $item );
	}

	foreach ( $list_2 as $item ) {
		$push( $item );
	}

	return array_values( $out );
}

/**
 * Merge two lists of associative items by property.
 *
 * Later (incoming) items overwrite earlier ones with the same property value.
 *
 * @param array  $list_1 first list.
 * @param array  $list_2 second list.
 * @param string $prop property name.
 */
function _xdac_merge_list_by_property( array $list_1, array $list_2, string $prop ): array {
	$index   = array();
	$order   = array();
	$orphans = array();

	foreach ( $list_1 as $item ) {
		if ( is_array( $item ) && array_key_exists( $prop, $item ) && ! is_array( $item[ $prop ] ) ) {
			$key = (string) $item[ $prop ];
			if ( ! array_key_exists( $key, $index ) ) {
				$order[] = $key;
			}
			$index[ $key ] = $item;
		} else {
			$orphans[] = $item;
		}
	}

	$new_keys = array();
	foreach ( $list_2 as $item ) {
		if ( is_array( $item ) && array_key_exists( $prop, $item ) && ! is_array( $item[ $prop ] ) ) {
			$key    = (string) $item[ $prop ];
			$is_new = ! array_key_exists( $key, $index );

			// Allow deep merging inside same-named items.
			$index[ $key ] = is_array( $index[ $key ] ?? null )
				? _xdac_merge_two( $index[ $key ], $item, array(), array() )
				: $item;

			if ( $is_new ) {
				$new_keys[] = $key;
			}
		} else {
			$orphans[] = $item;
		}
	}

	$out = array();
	foreach ( $order as $key ) {
		if ( isset( $index[ $key ] ) ) {
			$out[] = $index[ $key ];
			unset( $index[ $key ] );
		}
	}

	foreach ( $new_keys as $key ) {
		if ( isset( $index[ $key ] ) ) {
			$out[] = $index[ $key ];
			unset( $index[ $key ] );
		}
	}

	foreach ( $index as $item ) {
		$out[] = $item;
	}

	foreach ( $orphans as $item ) {
		$out[] = $item;
	}

	return array_values( $out );
}
