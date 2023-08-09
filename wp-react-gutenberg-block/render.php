<?php

/* This file is where I render a custom Gutenberg block inside the src folder of the block itself. This is a simple reusable accordion */

    return [
        // Render with PHP, therefore, we dont need to use the save() method on the Gutenberg script
      
        'attributes'      => [
          'heading_text' => [
            'type' => 'string'
          ],
          'defaul_toggle' => [
            'type' => 'string'
          ]
        ],
        'render_callback' => function( $attributes, $content = null) {

            $heading_display = '';

            if( isset($attributes["heading_text"]) ) {
            $heading_display .= ($attributes["heading_text"] != '' ) ? "<h3 class='accordion__item__heading-wrapp__heading'>".$attributes["heading_text"]."</h3>" : "<h3 class='accordion__item__heading-wrapp__heading'>Heading...</h3>";
            }
            
            // Turn on output buffering
            ob_start(); 

        ?>
            <!-- Accordion item -->
            <li class="accordion__item <?php echo $attributes["defaul_toggle"] ?>">

                <!-- Accordion head -->
                <div class="accordion__item__heading-wrapp">
                    <?php echo $heading_display; ?>
                    <span class="accordion__item__heading-wrapp__close-open"></span>
                </div>

                <!-- Accordion body -->
                <div class="accordion__item__content">
                    <?php echo $content;?>
                </div>

            </li>

        <?php
            
            // Collect output
            $output = ob_get_contents(); 

            // Turn off ouput buffer
            ob_end_clean(); 
            
        return $output;

        },
    ];