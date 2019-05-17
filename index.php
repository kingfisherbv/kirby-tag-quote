<?php
/*
 * kirby 3 kirbytag - quote
 *
 * copyright: Jermaine van Wijhe | https://kingfisher.nl/ | jermaine@kingfisher.nl
 * license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 */

Kirby::plugin('kingfisher/quote', [
  'options' => [
    'default_style' => 'none'
  ],
  'tags' => [
    'quote' => [
      'attr' => [
        'author',
      ],
      'html' => function($tag) {
        $html = '';

        $class = $tag->class;
        if ($tag->author != '') {
          $html .= '<blockquote cite="' . $tag->author . '">';
        } else {
          $html .= '<blockquote>';
        }
        $html .= '<span>'. $tag->value .'</span>';
        $html .= '</blockquote>';
        return $html;
      }
    ]
  ]
]);
