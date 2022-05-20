<?php

/* themes/custom/topplus/templates/page.html.twig */
class __TwigTemplate_fee200e84bcc191bc3ccb66f9ddb51dc571fed07d534e9160a179c93502d181a extends Twig_Template
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
        $filters = array("raw" => 229);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
                array()
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
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed d-block d-md-none\"><i class=\"fa fa-bars\"></i></button>
  ";
        }
        // line 90
        echo "
";
        // line 92
        echo "<div class=\"page-container\">

  ";
        // line 94
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array())) || $this->getAttribute(($context["page"] ?? null), "header_first", array())) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
            // line 95
            echo "    ";
            // line 96
            echo "    <div class=\"header-container\">

      ";
            // line 98
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
                // line 99
                echo "        ";
                // line 100
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
          <div class=\"";
                // line 101
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 103
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
              ";
                // line 104
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 105
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true));
                    echo "\"
              ";
                }
                // line 106
                echo ">
              <div class=\"row\">
                ";
                // line 108
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) {
                    // line 109
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 111
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 112
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 115
                    echo "                  </div>
                ";
                }
                // line 117
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array())) {
                    // line 118
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 120
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 121
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 124
                    echo "                  </div>
                ";
                }
                // line 126
                echo "              </div>
            </div>
            ";
                // line 129
                echo "          </div>
        </div>
        ";
                // line 132
                echo "      ";
            }
            // line 133
            echo "
      ";
            // line 134
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array()))) {
                // line 135
                echo "        ";
                // line 136
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
          <div class=\"";
                // line 137
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 139
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
              ";
                // line 140
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 141
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true));
                    echo "\"
              ";
                }
                // line 142
                echo ">
              <div class=\"row\">
                ";
                // line 144
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", array())) {
                    // line 145
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 147
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 148
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_first", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 151
                    echo "                  </div>
                ";
                }
                // line 153
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", array())) {
                    // line 154
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                    ";
                    // line 156
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 157
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_second", array()), "html", null, true));
                    echo "
                    </div>
                    ";
                    // line 160
                    echo "                  </div>
                ";
                }
                // line 162
                echo "              </div>
            </div>
            ";
                // line 165
                echo "          </div>
        </div>
        ";
                // line 168
                echo "      ";
            }
            // line 169
            echo "
      ";
            // line 170
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", array()) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array()))) {
                // line 171
                echo "        ";
                // line 172
                echo "        <header role=\"banner\" class=\"clearfix header ";
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
                // line 174
                if ((($context["transparent_header_state"] ?? null) == "enabled")) {
                    // line 175
                    echo "          <div class=\"transparent-header-container\">
            <div class=\"transparent-header-overlay ";
                    // line 176
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true));
                    echo "\" style=\"opacity: ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["transparent_header_opacity"] ?? null), "html", null, true));
                    echo ";\"></div>
          ";
                }
                // line 178
                echo "
            <div class=\"";
                // line 179
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true));
                echo "\">
              ";
                // line 181
                echo "              <div class=\"clearfix header__container\">
                <div class=\"row\">
                  ";
                // line 183
                if ($this->getAttribute(($context["page"] ?? null), "header_third", array())) {
                    // line 184
                    echo "                    <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true));
                    echo "\">
                      ";
                    // line 186
                    echo "                      <div class=\"clearfix header__section header-third\">
                        ";
                    // line 187
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_third", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 190
                    echo "                    </div>
                  ";
                }
                // line 192
                echo "                  ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", array())) {
                    // line 193
                    echo "                    <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true));
                    echo "\">
                      ";
                    // line 195
                    echo "                      <div class=\"clearfix header__section header-first\">
                        ";
                    // line 196
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 199
                    echo "                    </div>
                  ";
                }
                // line 201
                echo "                  ";
                if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
                    // line 202
                    echo "                    <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true));
                    echo "\">
                      ";
                    // line 204
                    echo "                      <div class=\"clearfix header__section header-second\">
                        ";
                    // line 205
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                    echo "
                      </div>
                      ";
                    // line 208
                    echo "                    </div>
                  ";
                }
                // line 210
                echo "                </div>
              </div>
              ";
                // line 213
                echo "            </div>

          ";
                // line 215
                if ((($context["transparent_header_state"] ?? null) == "enabled")) {
                    // line 216
                    echo "          </div>
          ";
                }
                // line 218
                echo "
        </header>
        ";
                // line 221
                echo "      ";
            }
            // line 222
            echo "
    </div>
    ";
            // line 225
            echo "  ";
        }
        // line 226
        echo "
  ";
        // line 227
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 228
            echo "    ";
            // line 229
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_id"] ?? null)) ? ((("id=\"" . ($context["banner_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix banner ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 230
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 232
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"banner__section\">
                ";
            // line 236
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 242
            echo "      </div>
    </div>
    ";
            // line 245
            echo "  ";
        }
        // line 246
        echo "
  ";
        // line 247
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", array())) {
            // line 248
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 252
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 258
        echo "
  ";
        // line 259
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 260
            echo "    ";
            // line 261
            echo "    <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_id"] ?? null)) ? ((("id=\"" . ($context["content_top_id"] ?? null)) . "\"")) : (""))));
            echo " class=\"clearfix content-top ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 262
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 264
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 265
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 266
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 267
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 271
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 277
            echo "      </div>
    </div>
    ";
            // line 280
            echo "  ";
        }
        // line 281
        echo "
  ";
        // line 282
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array())) {
            // line 283
            echo "    ";
            // line 284
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
            // line 285
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 287
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 288
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 289
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 290
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 294
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 300
            echo "      </div>
    </div>
    ";
            // line 303
            echo "  ";
        }
        // line 304
        echo "
  ";
        // line 306
        echo "  <div ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_id"] ?? null)) ? ((("id=\"" . ($context["main_content_id"] ?? null)) . "\"")) : (""))));
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true));
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 310
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">
            ";
        // line 312
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
        echo "\"
              ";
        // line 313
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 314
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true));
            echo "\"
              ";
        }
        // line 315
        echo ">
              ";
        // line 316
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 317
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              ";
        }
        // line 319
        echo "            </div>
            ";
        // line 321
        echo "          </section>
          ";
        // line 322
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 323
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 325
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"
                ";
            // line 326
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 327
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 328
            echo ">
                ";
            // line 329
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 332
            echo "            </aside>
          ";
        }
        // line 334
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 335
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 337
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"
                ";
            // line 338
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 339
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true));
                echo "\"
                ";
            }
            // line 340
            echo ">
                ";
            // line 341
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 344
            echo "            </aside>
          ";
        }
        // line 346
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 351
        echo "
  ";
        // line 352
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()))) {
            // line 353
            echo "    ";
            // line 354
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
            // line 355
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 357
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 358
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 359
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 360
            echo ">
          <div class=\"row\">
            ";
            // line 362
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array())) {
                // line 363
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 365
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 366
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 369
                echo "              </div>
            ";
            }
            // line 371
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", array())) {
                // line 372
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 374
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 375
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 378
                echo "              </div>
            ";
            }
            // line 380
            echo "          </div>
        </div>
        ";
            // line 383
            echo "      </div>
    </div>
    ";
            // line 386
            echo "  ";
        }
        // line 387
        echo "
  ";
        // line 388
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 389
            echo "    ";
            // line 390
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
            // line 391
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 393
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 394
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 395
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 396
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 400
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 406
            echo "      </div>
    </div>
    ";
            // line 409
            echo "  ";
        }
        // line 410
        echo "
  ";
        // line 411
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 412
            echo "    ";
            // line 413
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
            // line 414
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 416
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 417
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 418
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 419
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 423
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 429
            echo "      </div>
    </div>
    ";
            // line 432
            echo "  ";
        }
        // line 433
        echo "
  ";
        // line 434
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 435
            echo "    ";
            // line 436
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
            // line 437
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 439
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 440
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 441
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 442
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 446
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 452
            echo "      </div>
    </div>
    ";
            // line 455
            echo "  ";
        }
        // line 456
        echo "
  ";
        // line 457
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", array())) {
            // line 458
            echo "    ";
            // line 459
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
            // line 460
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 462
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 463
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 464
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 465
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 469
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 475
            echo "      </div>
    </div>
    ";
            // line 478
            echo "  ";
        }
        // line 479
        echo "
  ";
        // line 480
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", array())) {
            // line 481
            echo "    ";
            // line 482
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
            // line 483
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 485
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 486
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 487
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 488
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 492
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 498
            echo "      </div>
    </div>
    ";
            // line 501
            echo "  ";
        }
        // line 502
        echo "
  ";
        // line 503
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 504
            echo "    ";
            // line 505
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
            // line 506
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 508
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 509
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 510
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 511
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 515
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 521
            echo "      </div>
    </div>
    ";
            // line 524
            echo "  ";
        }
        // line 525
        echo "
  ";
        // line 526
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()))) {
            // line 527
            echo "    ";
            // line 528
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
            // line 529
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 531
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
            echo "\"
          ";
            // line 532
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 533
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true));
                echo "\"
          ";
            }
            // line 534
            echo ">
          <div class=\"row\">
            ";
            // line 536
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", array())) {
                // line 537
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 539
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 540
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 543
                echo "              </div>
            ";
            }
            // line 545
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", array())) {
                // line 546
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 548
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 549
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 552
                echo "              </div>
            ";
            }
            // line 554
            echo "          </div>
        </div>
        ";
            // line 557
            echo "      </div>
    </div>
    ";
            // line 560
            echo "  ";
        }
        // line 561
        echo "
  ";
        // line 562
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()))) {
            // line 563
            echo "    ";
            // line 564
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
            // line 565
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true));
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 568
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 569
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 571
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 572
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 573
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 574
                echo ">
                  ";
                // line 575
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 578
                echo "              </div>
            ";
            }
            // line 580
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 581
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 583
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 584
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 585
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 586
                echo ">
                  ";
                // line 587
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 590
                echo "              </div>
            ";
            }
            // line 592
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 593
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 594
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 596
                echo "                <div class=\"clearfix footer__section footer-third";
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
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 603
                echo "              </div>
            ";
            }
            // line 605
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true));
            echo "\"></div>
            ";
            // line 606
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 607
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 609
                echo "                <div class=\"clearfix footer__section footer-fourth";
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
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 616
                echo "              </div>
            ";
            }
            // line 618
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
                // line 619
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 621
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : (""))));
                echo "\"
                  ";
                // line 622
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 623
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"
                  ";
                }
                // line 624
                echo ">
                  ";
                // line 625
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 628
                echo "              </div>
            ";
            }
            // line 630
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 635
            echo "  ";
        }
        // line 636
        echo "
  ";
        // line 637
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 638
            echo "    ";
            // line 639
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
            // line 640
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 642
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 646
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 652
            echo "      </div>
    </div>
    ";
            // line 655
            echo "  ";
        }
        // line 656
        echo "
  ";
        // line 657
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 658
            echo "    ";
            // line 659
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
            // line 660
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 662
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 664
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array())) {
                // line 665
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 667
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 668
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 671
                echo "              </div>
            ";
            }
            // line 673
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 674
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 676
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 677
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
                </div>
                ";
                // line 680
                echo "              </div>
            ";
            }
            // line 682
            echo "          </div>
        </div>
        ";
            // line 685
            echo "      </div>
    </div>
    ";
            // line 688
            echo "  ";
        }
        // line 689
        echo "
  ";
        // line 690
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 691
            echo "  ";
            // line 692
            echo "    <div class=\"to-top\"><i class=\"fa ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
            echo "\"></i></div>
  ";
            // line 694
            echo "  ";
        }
        // line 695
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1542 => 695,  1539 => 694,  1534 => 692,  1532 => 691,  1530 => 690,  1527 => 689,  1524 => 688,  1520 => 685,  1516 => 682,  1512 => 680,  1507 => 677,  1504 => 676,  1499 => 674,  1496 => 673,  1492 => 671,  1487 => 668,  1484 => 667,  1479 => 665,  1477 => 664,  1473 => 662,  1469 => 660,  1457 => 659,  1455 => 658,  1453 => 657,  1450 => 656,  1447 => 655,  1443 => 652,  1435 => 646,  1429 => 642,  1425 => 640,  1413 => 639,  1411 => 638,  1409 => 637,  1406 => 636,  1403 => 635,  1397 => 630,  1393 => 628,  1388 => 625,  1385 => 624,  1379 => 623,  1377 => 622,  1372 => 621,  1367 => 619,  1364 => 618,  1360 => 616,  1355 => 613,  1352 => 612,  1346 => 611,  1344 => 610,  1339 => 609,  1334 => 607,  1332 => 606,  1325 => 605,  1321 => 603,  1316 => 600,  1313 => 599,  1307 => 598,  1305 => 597,  1300 => 596,  1295 => 594,  1293 => 593,  1288 => 592,  1284 => 590,  1279 => 587,  1276 => 586,  1270 => 585,  1268 => 584,  1263 => 583,  1258 => 581,  1255 => 580,  1251 => 578,  1246 => 575,  1243 => 574,  1237 => 573,  1235 => 572,  1230 => 571,  1225 => 569,  1223 => 568,  1217 => 565,  1205 => 564,  1203 => 563,  1201 => 562,  1198 => 561,  1195 => 560,  1191 => 557,  1187 => 554,  1183 => 552,  1178 => 549,  1175 => 548,  1170 => 546,  1167 => 545,  1163 => 543,  1158 => 540,  1155 => 539,  1150 => 537,  1148 => 536,  1144 => 534,  1138 => 533,  1136 => 532,  1131 => 531,  1127 => 529,  1114 => 528,  1112 => 527,  1110 => 526,  1107 => 525,  1104 => 524,  1100 => 521,  1092 => 515,  1086 => 511,  1080 => 510,  1078 => 509,  1073 => 508,  1069 => 506,  1058 => 505,  1056 => 504,  1054 => 503,  1051 => 502,  1048 => 501,  1044 => 498,  1036 => 492,  1030 => 488,  1024 => 487,  1022 => 486,  1017 => 485,  1013 => 483,  1002 => 482,  1000 => 481,  998 => 480,  995 => 479,  992 => 478,  988 => 475,  980 => 469,  974 => 465,  968 => 464,  966 => 463,  961 => 462,  957 => 460,  946 => 459,  944 => 458,  942 => 457,  939 => 456,  936 => 455,  932 => 452,  924 => 446,  918 => 442,  912 => 441,  910 => 440,  905 => 439,  901 => 437,  890 => 436,  888 => 435,  886 => 434,  883 => 433,  880 => 432,  876 => 429,  868 => 423,  862 => 419,  856 => 418,  854 => 417,  849 => 416,  845 => 414,  834 => 413,  832 => 412,  830 => 411,  827 => 410,  824 => 409,  820 => 406,  812 => 400,  806 => 396,  800 => 395,  798 => 394,  793 => 393,  789 => 391,  778 => 390,  776 => 389,  774 => 388,  771 => 387,  768 => 386,  764 => 383,  760 => 380,  756 => 378,  751 => 375,  748 => 374,  743 => 372,  740 => 371,  736 => 369,  731 => 366,  728 => 365,  723 => 363,  721 => 362,  717 => 360,  711 => 359,  709 => 358,  704 => 357,  700 => 355,  689 => 354,  687 => 353,  685 => 352,  682 => 351,  676 => 346,  672 => 344,  667 => 341,  664 => 340,  658 => 339,  656 => 338,  649 => 337,  644 => 335,  641 => 334,  637 => 332,  632 => 329,  629 => 328,  623 => 327,  621 => 326,  614 => 325,  609 => 323,  607 => 322,  604 => 321,  601 => 319,  595 => 317,  593 => 316,  590 => 315,  584 => 314,  582 => 313,  575 => 312,  571 => 310,  561 => 306,  558 => 304,  555 => 303,  551 => 300,  543 => 294,  537 => 290,  531 => 289,  529 => 288,  524 => 287,  520 => 285,  509 => 284,  507 => 283,  505 => 282,  502 => 281,  499 => 280,  495 => 277,  487 => 271,  481 => 267,  475 => 266,  473 => 265,  468 => 264,  464 => 262,  455 => 261,  453 => 260,  451 => 259,  448 => 258,  439 => 252,  433 => 248,  431 => 247,  428 => 246,  425 => 245,  421 => 242,  413 => 236,  407 => 232,  403 => 230,  394 => 229,  392 => 228,  390 => 227,  387 => 226,  384 => 225,  380 => 222,  377 => 221,  373 => 218,  369 => 216,  367 => 215,  363 => 213,  359 => 210,  355 => 208,  350 => 205,  347 => 204,  342 => 202,  339 => 201,  335 => 199,  330 => 196,  327 => 195,  322 => 193,  319 => 192,  315 => 190,  310 => 187,  307 => 186,  302 => 184,  300 => 183,  296 => 181,  292 => 179,  289 => 178,  282 => 176,  279 => 175,  277 => 174,  263 => 172,  261 => 171,  259 => 170,  256 => 169,  253 => 168,  249 => 165,  245 => 162,  241 => 160,  236 => 157,  233 => 156,  228 => 154,  225 => 153,  221 => 151,  216 => 148,  213 => 147,  208 => 145,  206 => 144,  202 => 142,  196 => 141,  194 => 140,  189 => 139,  185 => 137,  178 => 136,  176 => 135,  174 => 134,  171 => 133,  168 => 132,  164 => 129,  160 => 126,  156 => 124,  151 => 121,  148 => 120,  143 => 118,  140 => 117,  136 => 115,  131 => 112,  128 => 111,  123 => 109,  121 => 108,  117 => 106,  111 => 105,  109 => 104,  104 => 103,  100 => 101,  93 => 100,  91 => 99,  89 => 98,  85 => 96,  83 => 95,  81 => 94,  77 => 92,  74 => 90,  70 => 87,  67 => 85,  64 => 83,  58 => 79,  54 => 77,  47 => 75,  45 => 74,  43 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/page.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/page.html.twig");
    }
}
