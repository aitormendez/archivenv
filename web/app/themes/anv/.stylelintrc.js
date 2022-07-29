module.exports = {
  'extends': 'stylelint-config-standard',
  'rules': {
    'block-no-empty': null,
    'rule-empty-line-before': null,
    'no-descending-specificity': null,
    'selector-combinator-space-after': null,
    'selector-combinator-space-before': null,
    'no-empty-source': null,
    'string-quotes': 'double',
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
  },
};
