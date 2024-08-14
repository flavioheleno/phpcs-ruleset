<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.62.0|configurator
 * you can change this configuration by importing this file.
 */
$config = new PhpCsFixer\Config();
return $config
  ->setRiskyAllowed(true)
  ->setIndent('  ')
  ->setRules(
    [
      // Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
      'align_multiline_comment' => [
        'comment_type' => 'all_multiline'
      ],
      // Each element of an array must be indented exactly once.
      'array_indentation' => true,
      // Converts simple usages of `array_push($x, $y);` to `$x[] = $y;`.
      'array_push' => true,
      // PHP arrays should be declared using the configured syntax.
      'array_syntax' => true,
      // Use the null coalescing assignment operator `??=` where possible.
      'assign_null_coalescing_to_coalesce_equal' => true,
      // PHP attributes declared without arguments must (not) be followed by empty parentheses.
      'attribute_empty_parentheses' => true,
      // Converts backtick operators to `shell_exec` calls.
      'backtick_to_shell_exec' => true,
      // Binary operators should be surrounded by space as configured.
      'binary_operator_spaces' => true,
      // There MUST be one blank line after the namespace declaration.
      'blank_line_after_namespace' => true,
      // An empty line feed must precede any configured statement.
      'blank_line_before_statement' => true,
      // Putting blank lines between `use` statement groups.
      'blank_line_between_import_groups' => true,
      // Controls blank lines before a namespace declaration.
      'blank_lines_before_namespace' => [
        'max_line_breaks' => 1,
        'min_line_breaks' => 1
      ],
      // The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
      'braces' => [
        'position_after_functions_and_oop_constructs' => 'same'
      ],
      // Braces must be placed as configured.
      'braces_position' => [
        'classes_opening_brace' => 'same_line',
        'functions_opening_brace' => 'same_line'
      ],
      // A single space or none should be between cast and variable.
      'cast_spaces' => [
        'space' => 'none'
      ],
      // Class, trait and interface elements must be separated with one or none blank line.
      'class_attributes_separation' => [
        'elements' => [
          'const' => 'none',
          'method' => 'one',
          'property' => 'none',
          'trait_import' => 'none',
          'case' => 'none'
        ]
      ],
      // Whitespace around the keywords of a class, trait, enum or interfaces definition should be one space.
      'class_definition' => true,
      // When referencing an internal class it must be written using the correct casing.
      'class_reference_name_casing' => true,
      // Namespace must not contain spacing, comments or PHPDoc.
      'clean_namespace' => true,
      // Using `isset($var) &&` multiple times should be done in one call.
      'combine_consecutive_issets' => true,
      // Calling `unset` on multiple items should be done in one call.
      'combine_consecutive_unsets' => true,
      // Replace multiple nested calls of `dirname` by only one call with second `$level` parameter. Requires PHP >= 7.0.
      'combine_nested_dirname' => true,
      // Comments with annotation should be docblock when used on structural elements.
      'comment_to_phpdoc' => true,
      // Remove extra spaces in a nullable type declaration.
      'compact_nullable_type_declaration' => true,
      // Remove extra spaces in a nullable typehint.
      'compact_nullable_typehint' => true,
      // Concatenation should be spaced according to configuration.
      'concat_space' => [
        'spacing' => 'one'
      ],
      // The PHP constants `true`, `false`, and `null` MUST be written using the correct casing.
      'constant_case' => true,
      // The body of each control structure MUST be enclosed within braces.
      'control_structure_braces' => true,
      // Control structure continuation keyword must be on the configured line.
      'control_structure_continuation_position' => true,
      // Curly braces must be placed as configured.
      'curly_braces_position' => [
        'classes_opening_brace' => 'same_line',
        'functions_opening_brace' => 'same_line'
      ],
      // The first argument of `DateTime::createFromFormat` method must start with `!`.
      'date_time_create_from_format_call' => true,
      // Class `DateTimeImmutable` should be used instead of `DateTime`.
      'date_time_immutable' => true,
      // Equal sign in declare statement should be surrounded by spaces or not following configuration.
      'declare_equal_normalize' => [
        'space' => 'single'
      ],
      // There must not be spaces around `declare` statement parentheses.
      'declare_parentheses' => true,
      // Force strict types declaration in all files. Requires PHP >= 7.0.
      'declare_strict_types' => true,
      // Replaces `dirname(__FILE__)` expression with equivalent `__DIR__` constant.
      'dir_constant' => true,
      // Replaces short-echo `<?=` with long format `<?php echo`/`<?php print` syntax, or vice-versa.
      'echo_tag_syntax' => true,
      // Empty loop-body must be in configured style.
      'empty_loop_body' => [
        'style' => 'braces'
      ],
      // Empty loop-condition must be in configured style.
      'empty_loop_condition' => true,
      // PHP code MUST use only UTF-8 without BOM (remove BOM).
      'encoding' => true,
      // Replace deprecated `ereg` regular expression functions with `preg`.
      'ereg_to_preg' => true,
      // Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0.
      'explicit_indirect_variable' => true,
      // Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
      'explicit_string_variable' => true,
      // Order the flags in `fopen` calls, `b` and `t` must be last.
      'fopen_flag_order' => true,
      // The flags in `fopen` calls must omit `t`, and `b` must be omitted or included consistently.
      'fopen_flags' => true,
      // PHP code must use the long `<?php` tags or short-echo `<?=` tags and not other tag variations.
      'full_opening_tag' => true,
      // Removes the leading part of fully qualified symbol references if a given symbol is imported or belongs to the current namespace.
      'fully_qualified_strict_types' => true,
      // Spaces should be properly placed in a function declaration.
      'function_declaration' => true,
      // Replace core functions calls returning constants with the constants.
      'function_to_constant' => true,
      // Replace `get_class` calls on object variables with class keyword syntax.
      'get_class_to_class_keyword' => true,
      // Imports or fully qualifies global classes/functions/constants.
      'global_namespace_import' => true,
      // Function `implode` must be called with 2 arguments in the documented order.
      'implode_call' => true,
      // Include/Require and file path should be divided with a single space. File path should not be placed within parentheses.
      'include' => true,
      // Code MUST use configured indentation type.
      'indentation_type' => true,
      // Integer literals must be in correct case.
      'integer_literal_case' => true,
      // Replaces `is_null($var)` expression with `null === $var`.
      'is_null' => true,
      // Lambda must not import variables it doesn't use.
      'lambda_not_used_import' => true,
      // All PHP files must use same line ending.
      'line_ending' => true,
      // Ensure there is no code on the same line as the PHP open tag.
      'linebreak_after_opening_tag' => true,
      // List (`array` destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1.
      'list_syntax' => true,
      // Use `&&` and `||` logical operators instead of `and` and `or`.
      'logical_operators' => true,
      // Cast should be written in lower case.
      'lowercase_cast' => true,
      // PHP keywords MUST be in lower case.
      'lowercase_keywords' => true,
      // Class static references `self`, `static` and `parent` MUST be in lower case.
      'lowercase_static_reference' => true,
      // Magic constants should be referred to using the correct casing.
      'magic_constant_casing' => true,
      // Magic method definitions and calls must be using the correct casing.
      'magic_method_casing' => true,
      // Replace non multibyte-safe functions with corresponding mb function.
      'mb_str_functions' => true,
      // In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma. Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
      'method_argument_space' => true,
      // Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
      'method_chaining_indentation' => true,
      // Replace `strpos()` calls with `str_starts_with()` or `str_contains()` if possible.
      'modernize_strpos' => true,
      // Replaces `intval`, `floatval`, `doubleval`, `strval` and `boolval` function calls with according type casting operator.
      'modernize_types_casting' => true,
      // DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
      'multiline_comment_opening_closing' => true,
      // Convert multiline string to `heredoc` or `nowdoc`.
      'multiline_string_to_heredoc' => true,
      // Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls.
      'multiline_whitespace_before_semicolons' => true,
      // Add leading `\` before constant invocation of internal constant to speed up resolving. Constant name match is case-sensitive, except for `null`, `false` and `true`.
      'native_constant_invocation' => [
        'scope' => 'namespaced'
      ],
      // Function defined by PHP should be called using the correct casing.
      'native_function_casing' => true,
      // Add leading `\` before function invocation to speed up resolving.
      'native_function_invocation' => true,
      // Native type declarations should be used in the correct case.
      'native_type_declaration_casing' => true,
      // All instances created with `new` keyword must (not) be followed by parentheses.
      'new_with_parentheses' => true,
      // Master functions shall be used instead of aliases.
      'no_alias_functions' => [
        'sets' => ['@all']
      ],
      // Master language constructs shall be used instead of aliases.
      'no_alias_language_construct_call' => true,
      // Replace control structure alternative syntax to use braces.
      'no_alternative_syntax' => true,
      // There should not be a binary flag before strings.
      'no_binary_string' => true,
      // There should be no empty lines after class opening brace.
      'no_blank_lines_after_class_opening' => true,
      // There should not be blank lines between docblock and the documented element.
      'no_blank_lines_after_phpdoc' => true,
      // There must be a comment when fall-through is intentional in a non-empty case body.
      'no_break_comment' => true,
      // The closing `? >` tag MUST be omitted from files containing only PHP.
      'no_closing_tag' => true,
      // There should not be any empty comments.
      'no_empty_comment' => true,
      // There should not be empty PHPDoc blocks.
      'no_empty_phpdoc' => true,
      // Remove useless (semicolon) statements.
      'no_empty_statement' => true,
      // Removes extra blank lines and/or blank lines following configuration.
      'no_extra_blank_lines' => true,
      // Replace accidental usage of homoglyphs (non ascii characters) in names.
      'no_homoglyph_names' => true,
      // Remove leading slashes in `use` clauses.
      'no_leading_import_slash' => true,
      // The namespace declaration line shouldn't contain leading whitespace.
      'no_leading_namespace_whitespace' => true,
      // Either language construct `print` or `echo` should be used.
      'no_mixed_echo_print' => true,
      // Operator `=>` should not be surrounded by multi-line whitespaces.
      'no_multiline_whitespace_around_double_arrow' => true,
      // There must not be more than one statement per line.
      'no_multiple_statements_per_line' => true,
      // Convert PHP4-style constructors to `__construct`.
      'no_php4_constructor' => true,
      // Short cast `bool` using double exclamation mark should not be used.
      'no_short_bool_cast' => true,
      // Single-line whitespace before closing semicolon are prohibited.
      'no_singleline_whitespace_before_semicolons' => true,
      // There must be no space around double colons (also called Scope Resolution Operator or Paamayim Nekudotayim).
      'no_space_around_double_colon' => true,
      // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
      'no_spaces_after_function_name' => true,
      // There MUST NOT be spaces around offset braces.
      'no_spaces_around_offset' => true,
      // Replaces superfluous `elseif` with `if`.
      'no_superfluous_elseif' => true,
      // Removes `@param`, `@return` and `@var` tags that don't provide any useful information.
      'no_superfluous_phpdoc_tags' => true,
      // If a list of values separated by a comma is contained on a single line, then the last item MUST NOT have a trailing comma.
      'no_trailing_comma_in_singleline' => true,
      // Remove trailing whitespace at the end of non-blank lines.
      'no_trailing_whitespace' => true,
      // There MUST be no trailing spaces inside comment or PHPDoc.
      'no_trailing_whitespace_in_comment' => true,
      // Removes unneeded braces that are superfluous and aren't part of a control structure's body.
      'no_unneeded_braces' => [
        'namespaces' => true
      ],
      // Removes unneeded parentheses around control statements.
      'no_unneeded_control_parentheses' => true,
      // Imports should not be aliased as the same name.
      'no_unneeded_import_alias' => true,
      // Variables must be set `null` instead of using `(unset)` casting.
      'no_unset_cast' => true,
      // Properties should be set to `null` instead of using `unset`.
      'no_unset_on_property' => true,
      // Unused `use` statements must be removed.
      'no_unused_imports' => true,
      // There should not be useless concat operations.
      'no_useless_concat_operator' => true,
      // There should not be useless `else` cases.
      'no_useless_else' => true,
      // There should not be useless Null-safe operator `?->` used.
      'no_useless_nullsafe_operator' => true,
      // There should not be an empty `return` statement at the end of a function.
      'no_useless_return' => true,
      // There must be no `sprintf` calls with only the first argument.
      'no_useless_sprintf' => true,
      // In array declaration, there MUST NOT be a whitespace before each comma.
      'no_whitespace_before_comma_in_array' => true,
      // Remove trailing whitespace at the end of blank lines.
      'no_whitespace_in_blank_line' => true,
      // Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.
      'non_printable_character' => true,
      // Array index should always be written by using square braces.
      'normalize_index_brace' => true,
      // Logical NOT operators (`!`) should have one trailing whitespace.
      'not_operator_with_successor_space' => true,
      // Nullable single type declaration should be standardised using configured syntax.
      'nullable_type_declaration' => [
        'syntax' => 'union'
      ],
      // Adds or removes `?` before single type declarations or `|null` at the end of union types when parameters have a default `null` value.
      'nullable_type_declaration_for_default_null_value' => true,
      // There should not be space before or after object operators `->` and `?->`.
      'object_operator_without_whitespace' => true,
      // Literal octal must be in `0o` notation.
      'octal_notation' => true,
      // Operators - when multiline - must always be at the beginning or at the end of the line.
      'operator_linebreak' => true,
      // Sorts attributes using the configured sort algorithm.
      'ordered_attributes' => true,
      // Orders the elements of classes/interfaces/traits/enums.
      'ordered_class_elements' => [
        'order' => [
          'use_trait',
          'case',
          'constant_private',
          'constant_protected',
          'constant_public',
          'property_private',
          'property_protected',
          'property_public',
          'construct',
          'destruct',
          'magic',
          'phpunit',
          'method_private',
          'method_protected',
          'method_public'
        ],
        'sort_algorithm' => 'alpha'
      ],
      // Ordering `use` statements.
      'ordered_imports' => true,
      // Orders the interfaces in an `implements` or `interface extends` clause.
      'ordered_interfaces' => true,
      // Trait `use` statements must be sorted alphabetically.
      'ordered_traits' => true,
      // Sort union types and intersection types using configured order.
      'ordered_types' => [
        'null_adjustment' => 'always_last'
      ],
      // Rename deprecated PHPUnit assertions like `assertFileNotExists` to new methods like `assertFileDoesNotExist`.
      'php_unit_assert_new_names' => true,
      // PHPUnit attributes must be used over their respective PHPDoc-based annotations.
      'php_unit_attributes' => true,
      // PHPUnit assertion method calls like `->assertSame(true, $foo)` should be written with dedicated method like `->assertTrue($foo)`.
      'php_unit_construct' => true,
      // The return type of PHPUnit data provider must be `iterable`.
      'php_unit_data_provider_return_type' => true,
      // Data providers must be static.
      'php_unit_data_provider_static' => true,
      // PHPUnit assertions like `assertInternalType`, `assertFileExists`, should be used over `assertTrue`.
      'php_unit_dedicate_assert' => true,
      // PHPUnit assertions like `assertIsArray` should be used over `assertInternalType`.
      'php_unit_dedicate_assert_internal_type' => true,
      // Usages of `->setExpectedException*` methods MUST be replaced by `->expectException*` methods.
      'php_unit_expectation' => true,
      // Enforce camel (or snake) case for PHPUnit test methods, following configuration.
      'php_unit_method_casing' => true,
      // Usages of `->getMock` and `->getMockWithoutInvokingTheOriginalConstructor` methods MUST be replaced by `->createMock` or `->createPartialMock` methods.
      'php_unit_mock' => true,
      // Usage of PHPUnit's mock e.g. `->will($this->returnValue(..))` must be replaced by its shorter equivalent such as `->willReturn(...)`.
      'php_unit_mock_short_will_return' => true,
      // PHPUnit classes MUST be used in namespaced version, e.g. `\PHPUnit\Framework\TestCase` instead of `\PHPUnit_Framework_TestCase`.
      'php_unit_namespaced' => true,
      // Usages of `@expectedException*` annotations MUST be replaced by `->setExpectedException*` methods.
      'php_unit_no_expectation_annotation' => true,
      // Changes the visibility of the `setUp()` and `tearDown()` functions of PHPUnit to `protected`, to match the PHPUnit TestCase.
      'php_unit_set_up_tear_down_visibility' => true,
      // PHPUnit methods like `assertSame` should be used instead of `assertEquals`.
      'php_unit_strict' => true,
      // Adds or removes @test annotations from tests, following configuration.
      'php_unit_test_annotation' => true,
      // Calls to `PHPUnit\Framework\TestCase` static methods must all be of the same type, either `$this->`, `self::` or `static::`.
      'php_unit_test_case_static_method_calls' => [
        'call_type' => 'this'
      ],
      // PHPDoc annotation descriptions should not be a sentence.
      'phpdoc_annotation_without_dot' => true,
      // Docblocks should have the same indentation as the documented subject.
      'phpdoc_indent' => true,
      // `@access` annotations should be omitted from PHPDoc.
      'phpdoc_no_access' => true,
      // No alias PHPDoc tags should be used.
      'phpdoc_no_alias_tag' => true,
      // `@package` and `@subpackage` annotations should be omitted from PHPDoc.
      'phpdoc_no_package' => true,
      // Classy that does not inherit must not have `@inheritdoc` tags.
      'phpdoc_no_useless_inheritdoc' => true,
      // Annotations in PHPDoc should be ordered in defined sequence.
      'phpdoc_order' => true,
      // Order PHPDoc tags by value.
      'phpdoc_order_by_value' => true,
      // Orders all `@param` annotations in DocBlocks according to method signature.
      'phpdoc_param_order' => true,
      // Scalar types should always be written in the same form. `int` not `integer`, `bool` not `boolean`, `float` not `real` or `double`.
      'phpdoc_scalar' => true,
      // Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other. Annotations of a different type are separated by a single blank line.
      'phpdoc_separation' => true,
      // Single line `@var` PHPDoc should have proper spacing.
      'phpdoc_single_line_var_spacing' => true,
      // PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
      'phpdoc_summary' => true,
      // Fixes casing of PHPDoc tags.
      'phpdoc_tag_casing' => true,
      // Docblocks should only be used on structural elements.
      'phpdoc_to_comment' => true,
      // Takes `@param` annotations of non-mixed types and adjusts accordingly the function signature. Requires PHP >= 7.0.
      'phpdoc_to_param_type' => true,
      // Takes `@var` annotation of non-mixed types and adjusts accordingly the property signature. Requires PHP >= 7.4.
      'phpdoc_to_property_type' => true,
      // Takes `@return` annotation of non-mixed types and adjusts accordingly the function signature.
      'phpdoc_to_return_type' => true,
      // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
      'phpdoc_trim' => true,
      // Removes extra blank lines after summary and after description in PHPDoc.
      'phpdoc_trim_consecutive_blank_line_separation' => true,
      // The correct case must be used for standard PHP types in PHPDoc.
      'phpdoc_types' => true,
      // Sorts PHPDoc types.
      'phpdoc_types_order' => true,
      // `@var` and `@type` annotations must have type and name in the correct order.
      'phpdoc_var_annotation_correct_order' => true,
      // `@var` and `@type` annotations of classy properties should not contain the name.
      'phpdoc_var_without_name' => true,
      // Converts `pow` to the `**` operator.
      'pow_to_exponentiation' => true,
      // Converts `protected` variables and methods to `private` where possible.
      'protected_to_private' => true,
      // Replaces `rand`, `srand`, `getrandmax` functions calls with their `mt_*` analogs or `random_int`.
      'random_api_migration' => true,
      // Callables must be called without using `call_user_func*` when possible.
      'regular_callable_call' => true,
      // Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
      'return_assignment' => true,
      // If the function explicitly returns an array, and has the return type `iterable`, then `yield from` must be used instead of `return`.
      'return_to_yield_from' => true,
      // Adjust spacing around colon in return type declarations and backed enum types.
      'return_type_declaration' => true,
      // Inside class or interface element `self` should be preferred to the class name itself.
      'self_accessor' => true,
      // Inside an enum or `final`/anonymous class, `self` should be preferred over `static`.
      'self_static_accessor' => true,
      // Instructions must be terminated with a semicolon.
      'semicolon_after_instruction' => true,
      // Cast shall be used, not `settype`.
      'set_type_to_cast' => true,
      // Cast `(boolean)` and `(integer)` should be written as `(bool)` and `(int)`, `(double)` and `(real)` as `(float)`, `(binary)` as `(string)`.
      'short_scalar_cast' => true,
      // Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (`${` to `{$`).
      'simple_to_complex_string_variable' => true,
      // Simplify `if` control structures that return the boolean result of their condition.
      'simplified_if_return' => true,
      // A return statement wishing to return `void` should not return `null`.
      'simplified_null_return' => true,
      // A PHP file without end tag must always end with a single empty line feed.
      'single_blank_line_at_eof' => true,
      // There should be exactly one blank line before a namespace declaration.
      'single_blank_line_before_namespace' => true,
      // There MUST NOT be more than one property or constant declared per statement.
      'single_class_element_per_statement' => true,
      // There MUST be one use keyword per declaration.
      'single_import_per_statement' => true,
      // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
      'single_line_after_imports' => true,
      // Single-line comments must have proper spacing.
      'single_line_comment_spacing' => true,
      // Single-line comments and multi-line comments with only one line of actual content should use the `//` syntax.
      'single_line_comment_style' => true,
      // Empty body of class, interface, trait, enum or function must be abbreviated as `{}` and placed on the same line as the previous symbol, separated by a single space.
      'single_line_empty_body' => true,
      // Convert double quotes to single quotes for simple strings.
      'single_quote' => true,
      // Ensures a single space after language constructs.
      'single_space_around_construct' => true,
      // Each trait `use` must be done as single statement.
      'single_trait_insert_per_statement' => true,
      // Fix whitespace after a semicolon.
      'space_after_semicolon' => true,
      // Parentheses must be declared using the configured whitespace.
      'spaces_inside_parentheses' => true,
      // Replace all `<>` with `!=`.
      'standardize_not_equals' => true,
      // Each statement must be indented.
      'statement_indentation' => true,
      // Lambdas not (indirectly) referencing `$this` must be declared `static`.
      'static_lambda' => true,
      // Comparisons should be strict.
      'strict_comparison' => true,
      // Functions should be used with `$strict` param set to `true`.
      'strict_param' => true,
      // String tests for empty must be done against `''`, not with `strlen`.
      'string_length_to_empty' => true,
      // A case should be followed by a colon and not a semicolon.
      'switch_case_semicolon_to_colon' => true,
      // Removes extra spaces between colon and case value.
      'switch_case_space' => true,
      // Switch case must not be ended with `continue` but with `break`.
      'switch_continue_to_break' => true,
      // Standardize spaces around ternary operator.
      'ternary_operator_spaces' => true,
      // Use the Elvis operator `?:` where possible.
      'ternary_to_elvis_operator' => true,
      // Use `null` coalescing operator `??` where possible. Requires PHP >= 7.0.
      'ternary_to_null_coalescing' => true,
      // Arrays should be formatted like function/method arguments, without leading or trailing single line space.
      'trim_array_spaces' => true,
      // Ensure single space between a variable and its type declaration in function arguments and properties.
      'type_declaration_spaces' => true,
      // A single space or none should be around union type and intersection type operators.
      'types_spaces' => true,
      // Unary operators should be placed adjacent to their operands.
      'unary_operator_spaces' => true,
      // Visibility MUST be declared on all properties and methods; `abstract` and `final` MUST be declared before the visibility; `static` MUST be declared after the visibility.
      'visibility_required' => true,
      // Add `void` return type to functions with missing or empty return statements, but priority is given to `@return` annotations. Requires PHP >= 7.1.
      'void_return' => true,
      // In array declaration, there MUST be a whitespace after each comma.
      'whitespace_after_comma_in_array' => true,
      // Write conditions in Yoda style (`true`), non-Yoda style (`['equal' => false, 'identical' => false, 'less_and_greater' => false]`) or ignore those conditions (`null`) based on configuration.
      'yoda_style' => [
        'equal' => false,
        'identical' => false,
        'less_and_greater' => false
      ]
    ]
  )
  ->setFinder(
    PhpCsFixer\Finder::create()
      ->exclude('vendor')
      ->in(__DIR__)
  );
