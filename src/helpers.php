<?php

if (!function_exists('renderMenuList')) {
    function renderMenuList($items)
    {
        $html = '';

        foreach ($items as $item) {
            $dropdown_toggle_id = str_replace(' ', '', $item['name']);

            foreach ($item as $child) {
                if (is_array($child)) {
                    $html .= '<li>
                         <a href="#' . $dropdown_toggle_id . '" data-toggle="collapse" class="dropdown-toggle">' . $item['name'] . '</a>
                         <ul class="list-unstyled collapse" id="' . $dropdown_toggle_id . '">' . renderMenuList($child) . '</ul>
                      </li>';

                    continue 2;
                }
            }

            $html .= '<li><a href="#">' . $item['name'] . '</a></li>';
        }

        return $html;
    }
}
