<?php

/* themes/custom/topplus/templates/node--article.html.twig */
class __TwigTemplate_24653b62b6470e39056e6d8b7e1b51d10505e2d6f3da7f16d1ed64a758aae2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/topplus/templates/node--article.html.twig", 8);
        $this->blocks = array(
            'node_side' => array($this, 'block_node_side'),
            'meta_area' => array($this, 'block_meta_area'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 11, "trans" => 41);
        $filters = array("format_date" => 25, "url_encode" => 78, "without" => 164);
        $functions = array("attach_library" => 38, "url" => 78);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('format_date', 'url_encode', 'without'),
                array('attach_library', 'url')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_node_side($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"node__side\">
    ";
        // line 11
        if (((((((($context["display_submitted"] ?? null) || $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "font_resize", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "post_progress", array())) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) || ($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0)))) {
            // line 12
            echo "      ";
            if ((($context["display_submitted"] ?? null) || ($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0)))) {
                // line 13
                echo "        ";
                if (($context["display_submitted"] ?? null)) {
                    // line 14
                    echo "          <div class=\"node__user-info\">
            ";
                    // line 15
                    if (($context["author_picture"] ?? null)) {
                        // line 16
                        echo "              <div class=\"user-picture\">
                <div";
                        // line 17
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true));
                        echo ">
                  ";
                        // line 18
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
                        echo "
                </div>
              </div>
            ";
                    }
                    // line 22
                    echo "            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
                    echo "
          </div>
          <div class=\"node__submitted-date\">
            <div class=\"month\">";
                    // line 25
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "M")), "html", null, true));
                    echo "</div>
            <div class=\"day\">";
                    // line 26
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "d")), "html", null, true));
                    echo "</div>
            <div class=\"year\">";
                    // line 27
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "Y")), "html", null, true));
                    echo "</div>
          </div>
        ";
                }
                // line 30
                echo "        ";
                if (($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0))) {
                    // line 31
                    echo "          <div class=\"node__comments\">
            <i class=\"fa fa-comment\"></i>
            <div class=\"node__comments-count\">";
                    // line 33
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
                    echo "</div>
          </div>
        ";
                }
                // line 36
                echo "      ";
            }
            // line 37
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "reading_time", array())) {
                // line 38
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/reading-time"), "html", null, true));
                echo "
        <div class=\"reading-time\">
          ";
                // line 40
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 41
                    echo "            ";
                    echo t("1<div class=\"reading-time__text\">min read</div>", array());
                    // line 44
                    echo "          ";
                } else {
                    // line 45
                    echo "            ";
                    echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                     // line 46
($context["minutes"] ?? null), ));
                    // line 48
                    echo "          ";
                }
                // line 49
                echo "        </div>
      ";
            }
            // line 51
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "affix_side", array())) {
                // line 52
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/node-side-affix"), "html", null, true));
                echo "
        <div id=\"affix\">
      ";
            }
            // line 55
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "font_resize", array())) {
                // line 56
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/font-resize"), "html", null, true));
                echo "
        <div class=\"content-font-settings\">
            <div class=\"font-resize\">
              <a href=\"#\" id=\"decfont\">A-</a>
              <a href=\"#\" id=\"incfont\">A+</a>
            </div>
        </div>
      ";
            }
            // line 64
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "post_progress", array())) {
                // line 65
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/post-progress"), "html", null, true));
                echo "
        <div class=\"post-progress\">
          <div class=\"post-progress__value\"></div>
          <div class=\"post-progress__text\">";
                // line 68
                echo t("read", array());
                echo "</div>
          <div class=\"post-progress__bar\"></div>
        </div>
      ";
            }
            // line 72
            echo "      ";
            if ((($this->getAttribute(($context["mt_setting"] ?? null), "share_links_print_position", array()) == "node-side") && ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array()) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())))) {
                // line 73
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/share-links"), "html", null, true));
                echo "
        <div class=\"share-links\">
          <ul>
            ";
                // line 76
                if ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) {
                    // line 77
                    echo "              <li class=\"facebook";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 78
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "&t=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                </a>
              </li>
              <li class=\"twitter";
                    // line 82
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"http://twitter.com/share?text=";
                    // line 83
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&url=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                </a>
              </li>
              <li class=\"email";
                    // line 87
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"mailto:?Subject=";
                    // line 88
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&amp;Body=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\">
                    <i class=\"fa fa-envelope-o\"><span class=\"sr-only\">email</span></i>
                </a>
              </li>
            ";
                }
                // line 93
                echo "            ";
                if ($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) {
                    // line 94
                    echo "              <li class=\"print";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) ? (" share-links-enabled") : (""))));
                    echo "\">
                <div class=\"print\">
                  <a href=\"javascript:window.print()\" class=\"print-button\">
                    <i class=\"fa fa-print\"><span class=\"sr-only\">print</span></i>
                  </a>
                </div>
              </li>
            ";
                }
                // line 102
                echo "          </ul>
        </div>
      ";
            }
            // line 105
            echo "      ";
            if ($this->getAttribute(($context["mt_setting"] ?? null), "affix_side", array())) {
                // line 106
                echo "        </div>
      ";
            }
            // line 108
            echo "      ";
            if ((($this->getAttribute(($context["mt_setting"] ?? null), "share_links_print_position", array()) == "bottom") && ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array()) || $this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())))) {
                // line 109
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/share-links"), "html", null, true));
                echo "
        ";
                // line 110
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/fixed-share-links"), "html", null, true));
                echo "
        <div class=\"share-links\">
          <ul>
            ";
                // line 113
                if ($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) {
                    // line 114
                    echo "              <li class=\"facebook";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 115
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "&t=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                </a>
              </li>
              <li class=\"twitter";
                    // line 119
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"http://twitter.com/share?text=";
                    // line 120
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&url=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                </a>
              </li>
              <li class=\"email";
                    // line 124
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) ? (" print-button-enabled") : (""))));
                    echo "\">
                <a href=\"mailto:?Subject=";
                    // line 125
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_urlencode_filter($this->getAttribute(($context["node"] ?? null), "label", array()), true), "html", null, true));
                    echo "&amp;Body=";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node.canonical", array("node" => $this->getAttribute(($context["node"] ?? null), "id", array()))), "html", null, true));
                    echo "\">
                    <i class=\"fa fa-envelope-o\"><span class=\"sr-only\">email</span></i>
                </a>
              </li>
            ";
                }
                // line 130
                echo "            ";
                if ($this->getAttribute(($context["mt_setting"] ?? null), "print_button", array())) {
                    // line 131
                    echo "              <li class=\"print";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["mt_setting"] ?? null), "share_links", array())) ? (" share-links-enabled") : (""))));
                    echo "\">
                <div class=\"print\">
                  <a href=\"javascript:window.print()\" class=\"print-button\">
                    <i class=\"fa fa-print\"><span class=\"sr-only\">print</span></i>
                  </a>
                </div>
              </li>
            ";
                }
                // line 139
                echo "          </ul>
        </div>
      ";
            }
            // line 142
            echo "    ";
        }
        // line 143
        echo "  </div>
";
    }

    // line 145
    public function block_meta_area($context, array $blocks = array())
    {
        // line 146
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 147
        if ( !($context["page"] ?? null)) {
            // line 148
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
      <a href=\"";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 152
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 153
        if (($context["display_submitted"] ?? null)) {
            // line 154
            echo "    <div class=\"node__meta\">
      <span";
            // line 155
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "node__submitted-info"), "method"), "html", null, true));
            echo ">
        ";
            // line 156
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            // line 157
            echo "      </span>
    </div>
  ";
        }
    }

    // line 161
    public function block_content($context, array $blocks = array())
    {
        // line 162
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/node-article"), "html", null, true));
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "comment"), "html", null, true));
        echo "
  </div>
  ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 166,  414 => 164,  408 => 162,  405 => 161,  398 => 157,  396 => 156,  392 => 155,  389 => 154,  387 => 153,  382 => 152,  374 => 149,  369 => 148,  367 => 147,  362 => 146,  359 => 145,  354 => 143,  351 => 142,  346 => 139,  334 => 131,  331 => 130,  321 => 125,  317 => 124,  308 => 120,  304 => 119,  295 => 115,  290 => 114,  288 => 113,  282 => 110,  277 => 109,  274 => 108,  270 => 106,  267 => 105,  262 => 102,  250 => 94,  247 => 93,  237 => 88,  233 => 87,  224 => 83,  220 => 82,  211 => 78,  206 => 77,  204 => 76,  197 => 73,  194 => 72,  187 => 68,  180 => 65,  177 => 64,  165 => 56,  162 => 55,  155 => 52,  152 => 51,  148 => 49,  145 => 48,  143 => 46,  141 => 45,  138 => 44,  135 => 41,  133 => 40,  127 => 38,  124 => 37,  121 => 36,  115 => 33,  111 => 31,  108 => 30,  102 => 27,  98 => 26,  94 => 25,  87 => 22,  80 => 18,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  54 => 9,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/node--article.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/node--article.html.twig");
    }
}
