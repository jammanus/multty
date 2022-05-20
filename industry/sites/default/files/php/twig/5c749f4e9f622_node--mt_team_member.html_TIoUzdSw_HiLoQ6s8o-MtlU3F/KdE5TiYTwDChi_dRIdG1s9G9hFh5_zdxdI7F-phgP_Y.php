<?php

/* themes/custom/topplus/templates/node--mt_team_member.html.twig */
class __TwigTemplate_aa2d5a5abf805540dfea387fa91aeda060d6af05b978ef1b226a45d7642a4e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/topplus/templates/node--mt_team_member.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 12);
        $filters = array("render" => 12, "without" => 75);
        $functions = array("attach_library" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('render', 'without'),
                array('attach_library')
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
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/node-team-member"), "html", null, true));
        echo "
  <div class=\"row content\">
    ";
        // line 12
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", array()))) {
            // line 13
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/magnific-popup-field-member-photo-init"), "html", null, true));
            echo "
      <div class=\"col-lg-6\">
        <div class=\"photo-container\">
          ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", array()), "html", null, true));
            echo "
          ";
            // line 17
            if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", array()))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_linkedin_account", array())))) {
                // line 18
                echo "            <ul class=\"icons-list icons-list--bordered\">
              ";
                // line 19
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", array()))) {
                    // line 20
                    echo "                <li>
                  <a target=\"_blank\" href=\"";
                    // line 21
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_facebook_account", array()), "value", array()), "html", null, true));
                    echo "\">
                    <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                  </a>
                </li>
              ";
                }
                // line 26
                echo "              ";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", array()))) {
                    // line 27
                    echo "                <li>
                  <a target=\"_blank\" href=\"";
                    // line 28
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_twitter_account", array()), "value", array()), "html", null, true));
                    echo "\">
                    <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
              ";
                }
                // line 33
                echo "              ";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_linkedin_account", array()))) {
                    // line 34
                    echo "                <li>
                  <a target=\"_blank\" href=\"";
                    // line 35
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_linkedin_account", array()), "value", array()), "html", null, true));
                    echo "\">
                    <i class=\"fa fa-linkedin\"><span class=\"sr-only\">linkedin</span></i>
                  </a>
                </li>
              ";
                }
                // line 40
                echo "            </ul>
          ";
            }
            // line 42
            echo "        </div>
      </div>
    ";
        }
        // line 45
        echo "    <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", array()))) ? ("col-lg-6") : ("col-sm-12"))));
        echo "\">
      ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_mt_subtitle", array()), "html", null, true));
        echo "
      ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
        echo "
      ";
        // line 48
        if (( !$this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", array())) && (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", array()))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_linkedin_account", array()))))) {
            // line 49
            echo "        <ul class=\"icons-list icons-list--bordered\">
          ";
            // line 50
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", array()))) {
                // line 51
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_facebook_account", array()), "value", array()), "html", null, true));
                echo "\">
                <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
              </a>
            </li>
          ";
            }
            // line 57
            echo "          ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", array()))) {
                // line 58
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 59
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_twitter_account", array()), "value", array()), "html", null, true));
                echo "\">
                <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
              </a>
            </li>
          ";
            }
            // line 64
            echo "          ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_linkedin_account", array()))) {
                // line 65
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 66
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_linkedin_account", array()), "value", array()), "html", null, true));
                echo "\">
                <i class=\"fa fa-linkedin\"><span class=\"sr-only\">linkedin</span></i>
              </a>
            </li>
          ";
            }
            // line 71
            echo "        </ul>
      ";
        }
        // line 73
        echo "    </div>
  </div>
  ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_mt_member_photo", "field_mt_subtitle", "field_mt_facebook_account", "field_mt_twitter_account", "field_mt_linkedin_account", "body"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/node--mt_team_member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 75,  192 => 73,  188 => 71,  180 => 66,  177 => 65,  174 => 64,  166 => 59,  163 => 58,  160 => 57,  152 => 52,  149 => 51,  147 => 50,  144 => 49,  142 => 48,  138 => 47,  134 => 46,  129 => 45,  124 => 42,  120 => 40,  112 => 35,  109 => 34,  106 => 33,  98 => 28,  95 => 27,  92 => 26,  84 => 21,  81 => 20,  79 => 19,  76 => 18,  74 => 17,  70 => 16,  63 => 13,  61 => 12,  55 => 10,  52 => 9,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/node--mt_team_member.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/node--mt_team_member.html.twig");
    }
}
