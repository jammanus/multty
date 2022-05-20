<?php

/* themes/custom/topplus/templates/node--mt_showcase.html.twig */
class __TwigTemplate_0067b268a264bad5bbda60807333dedca66629792a59c524a1e8870470563aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/topplus/templates/node--mt_showcase.html.twig", 8);
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
        $tags = array("if" => 11, "trans" => 49);
        $filters = array("format_date" => 24);
        $functions = array("attach_library" => 55);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('format_date'),
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
    public function block_node_side($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"node__side\">
    ";
        // line 11
        if ((($context["display_submitted"] ?? null) || ($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0)))) {
            // line 12
            echo "      ";
            if (($context["display_submitted"] ?? null)) {
                // line 13
                echo "        <div class=\"node__user-info\">
          ";
                // line 14
                if (($context["author_picture"] ?? null)) {
                    // line 15
                    echo "            <div class=\"user-picture\">
              <div";
                    // line 16
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true));
                    echo ">
                ";
                    // line 17
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
                    echo "
              </div>
            </div>
          ";
                }
                // line 21
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
                echo "
        </div>
        <div class=\"node__submitted-date\">
          <div class=\"month\">";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "M")), "html", null, true));
                echo "</div>
          <div class=\"day\">";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "d")), "html", null, true));
                echo "</div>
          <div class=\"year\">";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute(($context["node"] ?? null), "createdtime", array()), "custom", "Y")), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 29
            echo "      ";
            if (($this->getAttribute(($context["node"] ?? null), "comment", array()) && (($context["comment_count"] ?? null) > 0))) {
                // line 30
                echo "        <div class=\"node__comments\">
          <i class=\"fa fa-comment\"></i>
          <div class=\"node__comments-count\">";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 35
            echo "    ";
        }
        // line 36
        echo "  </div>
";
    }

    // line 38
    public function block_meta_area($context, array $blocks = array())
    {
        // line 39
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 40
        if ( !($context["page"] ?? null)) {
            // line 41
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
      <a href=\"";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 45
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 46
        if (($context["display_submitted"] ?? null)) {
            // line 47
            echo "    <div class=\"node__meta\">
      <span";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "node__submitted-info"), "method"), "html", null, true));
            echo ">
        ";
            // line 49
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            // line 50
            echo "      </span>
    </div>
  ";
        }
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/node-showcase"), "html", null, true));
        echo "
  ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/node--mt_showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 56,  175 => 55,  172 => 54,  165 => 50,  163 => 49,  159 => 48,  156 => 47,  154 => 46,  149 => 45,  141 => 42,  136 => 41,  134 => 40,  129 => 39,  126 => 38,  121 => 36,  118 => 35,  112 => 32,  108 => 30,  105 => 29,  99 => 26,  95 => 25,  91 => 24,  84 => 21,  77 => 17,  73 => 16,  70 => 15,  68 => 14,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  54 => 9,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/node--mt_showcase.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/node--mt_showcase.html.twig");
    }
}
