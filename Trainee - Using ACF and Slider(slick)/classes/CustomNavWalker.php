<?php

class CustomNavWalker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"navbar-nav\">\n";
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /*
		 * Генерируем строку с CSS-классами элемента меню
		 */
		$class_names = $value = '';
		$classes = array();
        $classes[] = 'nav-item';

        // функция join превращает массив в строку
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $data_object, $args, $depth));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        /*
		 * Генерируем ID элемента
		 */
		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $data_object->ID, $data_object, $args, $depth);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';

        /*
		 * Генерируем элемент меню
		 */
        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $atts = array();
		$atts['title']  = ! empty($data_object->attr_title) ? $data_object->attr_title : '';
		$atts['target'] = ! empty($data_object->target)     ? $data_object->target     : '';
		$atts['rel']    = ! empty($data_object->xfn)        ? $data_object->xfn        : '';
		$atts['href']   = ! empty($data_object->url)        ? $data_object->url        : '';
        $atts = apply_filters('nav_menu_link_attributes', $atts, $data_object, $args, $depth);
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // ссылка и околоссылочный текст
		$item_output = $args->before;
        $item_output .= '<a'. $attributes . ' class="nav-link">';
        $item_output .= $args->link_before . apply_filters('the_title', $data_object->title, $data_object->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $data_object, $depth, $args);
    }

    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "</ul>\n";
    }
}

?>