<?php

if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Mkdf_Comparison_Pricing_Table_Holder extends WPBakeryShortCodesContainer
    {
    }
}

if (!function_exists('foton_core_add_comparison_pricing_table_shortcodes')) {
    function foton_core_add_comparison_pricing_table_shortcodes($shortcodes_class_name) {
        $shortcodes = array(
            'FotonCore\CPT\Shortcodes\ComparisonPricingTable\ComparisonPricingTableHolder',
            'FotonCore\CPT\Shortcodes\ComparisonPricingTable\ComparisonPricingItem'
        );

        $shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

        return $shortcodes_class_name;
    }

    add_filter('foton_core_filter_add_vc_shortcode', 'foton_core_add_comparison_pricing_table_shortcodes');
}

if (!function_exists('foton_core_set_comparison_pricing_table_icon_class_name_for_vc_shortcodes')) {
    /**
     * Function that set custom icon class name for animation holder shortcode to set our icon for Visual Composer shortcodes panel
     */
    function foton_core_set_comparison_pricing_table_icon_class_name_for_vc_shortcodes($shortcodes_icon_class_array) {
        $shortcodes_icon_class_array[] = '.icon-wpb-cmp-pricing-table';
        $shortcodes_icon_class_array[] = '.icon-wpb-cmp-pricing-item';

        return $shortcodes_icon_class_array;
    }

    add_filter('foton_core_filter_add_vc_shortcodes_custom_icon_class', 'foton_core_set_comparison_pricing_table_icon_class_name_for_vc_shortcodes');
}