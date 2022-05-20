<?php

/* themes/custom/topplus/templates/page--front.html.twig */
class __TwigTemplate_e840f6c29333ac6430fd5efe40fc0a6cc4c3013da51c3f1d27c5638adba3ddbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 73);
        $filters = array("raw" => 237);
        $functions = array("file_url" => 98);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "slideout", array())) {
            // line 74
            echo "  ";
            // line 75
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
    ";
            // line 77
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideout", array()), "html", null, true));
            echo "
      </div>
    </div>
    ";
            // line 83
            echo "  </div>
  ";
            // line 85
            echo "
  ";
            // line 87
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-bars\"></i></button>
  ";
        }
        // line 90
        echo "
";
        // line 92
        echo "<div class=\"page-container\">

  ";
        // line 94
        if ((($context["front_page_background_state"] ?? null) == "enabled")) {
            // line 95
            echo "  ";
            // line 96
            echo "  <div class=\"background-image-area\">

    <div class=\"background-image-area__image\" style=\"background-image: url(";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array((($context["directory"] ?? null) . "/images/background-image-banner.jpg"))), "html", null, true));
            echo ");\"></div>
    <div class=\"background-image-area__overlay region--dark-typography region--colored-background\" style=\"opacity: ";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page_background_opacity"] ?? null), "html", null, true));
            echo ";\"></div>
  ";
        }
        // line 101
        echo "
    ";
        // line 102
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array())) || $this->getAttribute(($context["page"] ?? null), "header_first", array())) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
            // line 103
            echo "      ";
            // line 104
            echo "      <div class=\"header-container\">

        ";
            // line 106
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
                // line 107
                echo "          ";
                // line 108
                echo "          <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
            <div class=\"";
                // line 109
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true));
                echo "\">
              ";
                // line 111
                echo "              <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                ";
                // line 112
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 113
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                ";
                }
                // line 114
                echo ">
                <div class=\"row\">
                  ";
                // line 116
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) {
                    // line 117
                    echo "                    <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                      ";
                    // line 119
                    echo "                      <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                        ";
                    // line 120
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 123
                    echo "                    </div>
                  ";
                }
                // line 125
                echo "                  ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array())) {
                    // line 126
                    echo "                    <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                      ";
                    // line 128
                    echo "                      <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                        ";
                    // line 129
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 132
                    echo "                    </div>
                  ";
                }
                // line 134
                echo "                </div>
              </div>
              ";
                // line 137
                echo "            </div>
          </div>
          ";
                // line 140
                echo "        ";
            }
            // line 141
            echo "
        ";
            // line 142
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array()))) {
                // line 143
                echo "          ";
                // line 144
                echo "          <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
            <div class=\"";
                // line 145
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true));
                echo "\">
              ";
                // line 147
                echo "              <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                ";
                // line 148
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 149
                    echo "                  data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                ";
                }
                // line 150
                echo ">
                <div class=\"row\">
                  ";
                // line 152
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", array())) {
                    // line 153
                    echo "                    <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                      ";
                    // line 155
                    echo "                      <div class=\"clearfix header-top__section header-top-first\">
                        ";
                    // line 156
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_first", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 159
                    echo "                    </div>
                  ";
                }
                // line 161
                echo "                  ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", array())) {
                    // line 162
                    echo "                    <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                      ";
                    // line 164
                    echo "                      <div class=\"clearfix header-top__section header-top-second\">
                        ";
                    // line 165
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_second", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 168
                    echo "                    </div>
                  ";
                }
                // line 170
                echo "                </div>
              </div>
              ";
                // line 173
                echo "            </div>
          </div>
          ";
                // line 176
                echo "        ";
            }
            // line 177
            echo "
        ";
            // line 178
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", array()) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array()))) {
                // line 179
                echo "          ";
                // line 180
                echo "          <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["transparent_header_class"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">

            ";
                // line 182
                if ((($context["transparent_header_state"] ?? null) == "enabled")) {
                    // line 183
                    echo "            <div class=\"transparent-header-container\">
              <div class=\"transparent-header-overlay ";
                    // line 184
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true));
                    echo "\" style=\"opacity: ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["transparent_header_opacity"] ?? null), "html", null, true));
                    echo ";\"></div>
            ";
                }
                // line 186
                echo "
              <div class=\"";
                // line 187
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 189
                echo "                <div class=\"clearfix header__container\">
                  <div class=\"row\">
                    ";
                // line 191
                if ($this->getAttribute(($context["page"] ?? null), "header_third", array())) {
                    // line 192
                    echo "                      <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true));
                    echo "\">
                        ";
                    // line 194
                    echo "                        <div class=\"clearfix header__section header-third\">
                          ";
                    // line 195
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_third", array()), "html", null, true));
                    echo "
                        </div>
                        ";
                    // line 198
                    echo "                      </div>
                    ";
                }
                // line 200
                echo "                    ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", array())) {
                    // line 201
                    echo "                      <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                        ";
                    // line 203
                    echo "                        <div class=\"clearfix header__section header-first\">
                          ";
                    // line 204
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
                    echo "
                        </div>
                        ";
                    // line 207
                    echo "                      </div>
                    ";
                }
                // line 209
                echo "                    ";
                if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
                    // line 210
                    echo "                      <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                        ";
                    // line 212
                    echo "                        <div class=\"clearfix header__section header-second\">
                          ";
                    // line 213
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                    echo "
                        </div>
                        ";
                    // line 216
                    echo "                      </div>
                    ";
                }
                // line 218
                echo "                  </div>
                </div>
                ";
                // line 221
                echo "              </div>

          ";
                // line 223
                if ((($context["transparent_header_state"] ?? null) == "enabled")) {
                    // line 224
                    echo "          </div>
          ";
                }
                // line 226
                echo "
          </header>
          ";
                // line 229
                echo "        ";
            }
            // line 230
            echo "
      </div>
      ";
            // line 233
            echo "    ";
        }
        // line 234
        echo "
    ";
        // line 235
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 236
            echo "      ";
            // line 237
            echo "      <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_id"] ?? null)) ? ((("id=\"" . ($context["banner_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix banner ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
        <div class=\"";
            // line 238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true));
            echo "\">
          ";
            // line 240
            echo "          <div class=\"clearfix banner__container\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"banner__section\">
                  ";
            // line 244
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 250
            echo "        </div>
      </div>
      ";
            // line 253
            echo "    ";
        }
        // line 254
        echo "
  ";
        // line 255
        if ((($context["front_page_background_state"] ?? null) == "enabled")) {
            // line 256
            echo "  </div>
  ";
            // line 258
            echo "  ";
        }
        // line 259
        echo "
  ";
        // line 260
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", array())) {
            // line 261
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 265
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 271
        echo "
  ";
        // line 272
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 273
            echo "    ";
            // line 274
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_id"] ?? null)) ? ((("id=\"" . ($context["content_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix content-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 275
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 277
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 278
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 279
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 280
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 284
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 290
            echo "      </div>
    </div>
    ";
            // line 293
            echo "  ";
        }
        // line 294
        echo "
  ";
        // line 295
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array())) {
            // line 296
            echo "    ";
            // line 297
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_id"] ?? null)) ? ((("id=\"" . ($context["content_top_highlighted_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 298
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 300
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 301
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 302
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 303
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 307
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 313
            echo "      </div>
    </div>
    ";
            // line 316
            echo "  ";
        }
        // line 317
        echo "
  ";
        // line 319
        echo "  <div ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_id"] ?? null)) ? ((("id=\"" . ($context["main_content_id"] ?? null)) . "\"")) : (""))));
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true));
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 323
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">
            ";
        // line 325
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
        echo "\"
              ";
        // line 326
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 327
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true));
            echo "\"
              ";
        }
        // line 328
        echo ">
              ";
        // line 329
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 330
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              ";
        }
        // line 332
        echo "            </div>
            ";
        // line 334
        echo "          </section>
          ";
        // line 335
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 336
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 338
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"
                ";
            // line 339
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 340
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 341
            echo ">
                ";
            // line 342
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 345
            echo "            </aside>
          ";
        }
        // line 347
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 348
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 350
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"
                ";
            // line 351
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 352
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 353
            echo ">
                ";
            // line 354
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 357
            echo "            </aside>
          ";
        }
        // line 359
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 364
        echo "
  ";
        // line 365
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()))) {
            // line 366
            echo "    ";
            // line 367
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_id"] ?? null)) ? ((("id=\"" . ($context["content_bottom_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 368
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 370
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 371
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 372
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 373
            echo ">
          <div class=\"row\">
            ";
            // line 375
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array())) {
                // line 376
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 378
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 379
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 382
                echo "              </div>
            ";
            }
            // line 384
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", array())) {
                // line 385
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 387
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 388
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 391
                echo "              </div>
            ";
            }
            // line 393
            echo "          </div>
        </div>
        ";
            // line 396
            echo "      </div>
    </div>
    ";
            // line 399
            echo "  ";
        }
        // line 400
        echo "
  ";
        // line 401
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 402
            echo "    ";
            // line 403
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_id"] ?? null)) ? ((("id=\"" . ($context["featured_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix featured-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 404
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 406
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 407
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 408
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 409
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 413
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 419
            echo "      </div>
    </div>
    ";
            // line 422
            echo "  ";
        }
        // line 423
        echo "
  ";
        // line 424
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 425
            echo "    ";
            // line 426
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_id"] ?? null)) ? ((("id=\"" . ($context["featured_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 427
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 429
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 430
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 431
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 432
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 436
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 442
            echo "      </div>
    </div>
    ";
            // line 445
            echo "  ";
        }
        // line 446
        echo "
  ";
        // line 447
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 448
            echo "    ";
            // line 449
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_id"] ?? null)) ? ((("id=\"" . ($context["featured_bottom_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 450
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 452
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 453
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 454
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 455
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 459
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 465
            echo "      </div>
    </div>
    ";
            // line 468
            echo "  ";
        }
        // line 469
        echo "
  ";
        // line 470
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", array())) {
            // line 471
            echo "    ";
            // line 472
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_id"] ?? null)) ? ((("id=\"" . ($context["sub_featured_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 473
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 475
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 476
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 477
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 478
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 482
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 488
            echo "      </div>
    </div>
    ";
            // line 491
            echo "  ";
        }
        // line 492
        echo "
  ";
        // line 493
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", array())) {
            // line 494
            echo "    ";
            // line 495
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_id"] ?? null)) ? ((("id=\"" . ($context["highlighted_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 496
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 498
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 499
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 500
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 501
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 505
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 511
            echo "      </div>
    </div>
    ";
            // line 514
            echo "  ";
        }
        // line 515
        echo "
  ";
        // line 516
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 517
            echo "    ";
            // line 518
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_id"] ?? null)) ? ((("id=\"" . ($context["highlighted_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix highlighted ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 519
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 521
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 522
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 523
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 524
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 528
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 534
            echo "      </div>
    </div>
    ";
            // line 537
            echo "  ";
        }
        // line 538
        echo "
  ";
        // line 539
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()))) {
            // line 540
            echo "    ";
            // line 541
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_id"] ?? null)) ? ((("id=\"" . ($context["footer_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix footer-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_regions"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 542
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 544
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 545
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 546
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 547
            echo ">
          <div class=\"row\">
            ";
            // line 549
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", array())) {
                // line 550
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 552
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 553
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 556
                echo "              </div>
            ";
            }
            // line 558
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", array())) {
                // line 559
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 561
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 562
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 565
                echo "              </div>
            ";
            }
            // line 567
            echo "          </div>
        </div>
        ";
            // line 570
            echo "      </div>
    </div>
    ";
            // line 573
            echo "  ";
        }
        // line 574
        echo "
  ";
        // line 575
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()))) {
            // line 576
            echo "    ";
            // line 577
            echo "    <footer ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_id"] ?? null)) ? ((("id=\"" . ($context["footer_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix footer ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 578
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true));
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 581
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 582
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 584
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 585
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 586
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 587
                echo ">
                  ";
                // line 588
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 591
                echo "              </div>
            ";
            }
            // line 593
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 594
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 596
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 597
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 598
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 599
                echo ">
                  ";
                // line 600
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 603
                echo "              </div>
            ";
            }
            // line 605
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 606
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 607
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 609
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 610
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 611
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 612
                echo ">
                  ";
                // line 613
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 616
                echo "              </div>
            ";
            }
            // line 618
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 619
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 620
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 622
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 623
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 624
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 625
                echo ">
                  ";
                // line 626
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 629
                echo "              </div>
            ";
            }
            // line 631
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
                // line 632
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 634
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 635
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 636
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 637
                echo ">
                  ";
                // line 638
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 641
                echo "              </div>
            ";
            }
            // line 643
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 648
            echo "  ";
        }
        // line 649
        echo "
  ";
        // line 650
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 651
            echo "    ";
            // line 652
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_id"] ?? null)) ? ((("id=\"" . ($context["footer_bottom_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 653
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 655
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 659
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 665
            echo "      </div>
    </div>
    ";
            // line 668
            echo "  ";
        }
        // line 669
        echo "
  ";
        // line 670
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 671
            echo "    ";
            // line 672
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_id"] ?? null)) ? ((("id=\"" . ($context["subfooter_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix subfooter ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_background_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_separator"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 673
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 675
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 677
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array())) {
                // line 678
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 680
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 681
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 684
                echo "              </div>
            ";
            }
            // line 686
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 687
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 689
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 690
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 693
                echo "              </div>
            ";
            }
            // line 695
            echo "          </div>
        </div>
        ";
            // line 698
            echo "      </div>
    </div>
    ";
            // line 701
            echo "  ";
        }
        // line 702
        echo "
  ";
        // line 703
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 704
            echo "  ";
            // line 705
            echo "    <div class=\"to-top\"><i class=\"fa ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
            echo "\"></i></div>
  ";
            // line 707
            echo "  ";
        }
        // line 708
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1573 => 708,  1570 => 707,  1565 => 705,  1563 => 704,  1561 => 703,  1558 => 702,  1555 => 701,  1551 => 698,  1547 => 695,  1543 => 693,  1538 => 690,  1535 => 689,  1530 => 687,  1527 => 686,  1523 => 684,  1518 => 681,  1515 => 680,  1510 => 678,  1508 => 677,  1504 => 675,  1500 => 673,  1488 => 672,  1486 => 671,  1484 => 670,  1481 => 669,  1478 => 668,  1474 => 665,  1466 => 659,  1460 => 655,  1456 => 653,  1444 => 652,  1442 => 651,  1440 => 650,  1437 => 649,  1434 => 648,  1428 => 643,  1424 => 641,  1419 => 638,  1416 => 637,  1410 => 636,  1408 => 635,  1403 => 634,  1398 => 632,  1395 => 631,  1391 => 629,  1386 => 626,  1383 => 625,  1377 => 624,  1375 => 623,  1370 => 622,  1365 => 620,  1363 => 619,  1356 => 618,  1352 => 616,  1347 => 613,  1344 => 612,  1338 => 611,  1336 => 610,  1331 => 609,  1326 => 607,  1324 => 606,  1319 => 605,  1315 => 603,  1310 => 600,  1307 => 599,  1301 => 598,  1299 => 597,  1294 => 596,  1289 => 594,  1286 => 593,  1282 => 591,  1277 => 588,  1274 => 587,  1268 => 586,  1266 => 585,  1261 => 584,  1256 => 582,  1254 => 581,  1248 => 578,  1236 => 577,  1234 => 576,  1232 => 575,  1229 => 574,  1226 => 573,  1222 => 570,  1218 => 567,  1214 => 565,  1209 => 562,  1206 => 561,  1201 => 559,  1198 => 558,  1194 => 556,  1189 => 553,  1186 => 552,  1181 => 550,  1179 => 549,  1175 => 547,  1169 => 546,  1167 => 545,  1162 => 544,  1158 => 542,  1145 => 541,  1143 => 540,  1141 => 539,  1138 => 538,  1135 => 537,  1131 => 534,  1123 => 528,  1117 => 524,  1111 => 523,  1109 => 522,  1104 => 521,  1100 => 519,  1089 => 518,  1087 => 517,  1085 => 516,  1082 => 515,  1079 => 514,  1075 => 511,  1067 => 505,  1061 => 501,  1055 => 500,  1053 => 499,  1048 => 498,  1044 => 496,  1033 => 495,  1031 => 494,  1029 => 493,  1026 => 492,  1023 => 491,  1019 => 488,  1011 => 482,  1005 => 478,  999 => 477,  997 => 476,  992 => 475,  988 => 473,  977 => 472,  975 => 471,  973 => 470,  970 => 469,  967 => 468,  963 => 465,  955 => 459,  949 => 455,  943 => 454,  941 => 453,  936 => 452,  932 => 450,  921 => 449,  919 => 448,  917 => 447,  914 => 446,  911 => 445,  907 => 442,  899 => 436,  893 => 432,  887 => 431,  885 => 430,  880 => 429,  876 => 427,  865 => 426,  863 => 425,  861 => 424,  858 => 423,  855 => 422,  851 => 419,  843 => 413,  837 => 409,  831 => 408,  829 => 407,  824 => 406,  820 => 404,  809 => 403,  807 => 402,  805 => 401,  802 => 400,  799 => 399,  795 => 396,  791 => 393,  787 => 391,  782 => 388,  779 => 387,  774 => 385,  771 => 384,  767 => 382,  762 => 379,  759 => 378,  754 => 376,  752 => 375,  748 => 373,  742 => 372,  740 => 371,  735 => 370,  731 => 368,  720 => 367,  718 => 366,  716 => 365,  713 => 364,  707 => 359,  703 => 357,  698 => 354,  695 => 353,  689 => 352,  687 => 351,  680 => 350,  675 => 348,  672 => 347,  668 => 345,  663 => 342,  660 => 341,  654 => 340,  652 => 339,  645 => 338,  640 => 336,  638 => 335,  635 => 334,  632 => 332,  626 => 330,  624 => 329,  621 => 328,  615 => 327,  613 => 326,  606 => 325,  602 => 323,  592 => 319,  589 => 317,  586 => 316,  582 => 313,  574 => 307,  568 => 303,  562 => 302,  560 => 301,  555 => 300,  551 => 298,  540 => 297,  538 => 296,  536 => 295,  533 => 294,  530 => 293,  526 => 290,  518 => 284,  512 => 280,  506 => 279,  504 => 278,  499 => 277,  495 => 275,  486 => 274,  484 => 273,  482 => 272,  479 => 271,  470 => 265,  464 => 261,  462 => 260,  459 => 259,  456 => 258,  453 => 256,  451 => 255,  448 => 254,  445 => 253,  441 => 250,  433 => 244,  427 => 240,  423 => 238,  414 => 237,  412 => 236,  410 => 235,  407 => 234,  404 => 233,  400 => 230,  397 => 229,  393 => 226,  389 => 224,  387 => 223,  383 => 221,  379 => 218,  375 => 216,  370 => 213,  367 => 212,  362 => 210,  359 => 209,  355 => 207,  350 => 204,  347 => 203,  342 => 201,  339 => 200,  335 => 198,  330 => 195,  327 => 194,  322 => 192,  320 => 191,  316 => 189,  312 => 187,  309 => 186,  302 => 184,  299 => 183,  297 => 182,  283 => 180,  281 => 179,  279 => 178,  276 => 177,  273 => 176,  269 => 173,  265 => 170,  261 => 168,  256 => 165,  253 => 164,  248 => 162,  245 => 161,  241 => 159,  236 => 156,  233 => 155,  228 => 153,  226 => 152,  222 => 150,  216 => 149,  214 => 148,  209 => 147,  205 => 145,  198 => 144,  196 => 143,  194 => 142,  191 => 141,  188 => 140,  184 => 137,  180 => 134,  176 => 132,  171 => 129,  168 => 128,  163 => 126,  160 => 125,  156 => 123,  151 => 120,  148 => 119,  143 => 117,  141 => 116,  137 => 114,  131 => 113,  129 => 112,  124 => 111,  120 => 109,  113 => 108,  111 => 107,  109 => 106,  105 => 104,  103 => 103,  101 => 102,  98 => 101,  93 => 99,  89 => 98,  85 => 96,  83 => 95,  81 => 94,  77 => 92,  74 => 90,  70 => 87,  67 => 85,  64 => 83,  58 => 79,  54 => 77,  47 => 75,  45 => 74,  43 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/page--front.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/page--front.html.twig");
    }
}
