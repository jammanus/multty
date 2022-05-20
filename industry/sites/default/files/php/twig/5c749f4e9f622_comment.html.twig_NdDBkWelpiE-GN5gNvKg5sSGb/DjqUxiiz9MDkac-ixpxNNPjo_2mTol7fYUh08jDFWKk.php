<?php

/* themes/custom/topplus/templates/comment.html.twig */
class __TwigTemplate_38286643cd5c6f4c6d2ef3998309c14f2641bf5b7c03f4c3ff09f70751d99a9a extends Twig_Template
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
        $tags = array("if" => 68, "set" => 72);
        $filters = array("without" => 81);
        $functions = array("attach_library" => 67);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('without'),
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

        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/comment"), "html", null, true));
        echo "
";
        // line 68
        if (($context["threaded"] ?? null)) {
            // line 69
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/drupal.comment.threaded"), "html", null, true));
            echo "
";
        }
        // line 72
        $context["classes"] = array(0 => "comment", 1 => "js-comment", 2 => (((        // line 75
($context["status"] ?? null) != "published")) ? (("comment--" . ($context["status"] ?? null))) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 76
($context["comment"] ?? null), "owner", array()), "anonymous", array())) ? ("by-anonymous") : ("")), 4 => (((        // line 77
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == $this->getAttribute(($context["commented_entity"] ?? null), "getOwnerId", array(), "method")))) ? ((("by-" . $this->getAttribute(($context["commented_entity"] ?? null), "getEntityTypeId", array(), "method")) . "-author")) : ("")), 5 => "clearfix");
        // line 81
        echo "<article role=\"article\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role"), "html", null, true));
        echo ">
  ";
        // line 87
        echo "  <span class=\"hidden new-indicator\" data-comment-timestamp=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["new_indicator_timestamp"] ?? null), "html", null, true));
        echo "\"></span>

  ";
        // line 89
        if (($context["user_picture"] ?? null)) {
            // line 90
            echo "    <header>
      ";
            // line 91
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_picture"] ?? null), "html", null, true));
            echo "
    </header>
  ";
        }
        // line 94
        echo "
  <div class=\"comment__content-container\">
    ";
        // line 96
        if (($context["title"] ?? null)) {
            // line 97
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
      <h3";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
      ";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 101
        echo "    <div class=\"comment__meta\">
      <p class=\"comment__submitted\">";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted"] ?? null), "html", null, true));
        echo "</p>
      ";
        // line 103
        if (($context["parent"] ?? null)) {
            // line 104
            echo "        <p class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["parent"] ?? null), "html", null, true));
            echo "</p>
      ";
        }
        // line 106
        echo "    </div>
    <div";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "comment__content"), "method"), "html", null, true));
        echo ">
      ";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 108,  122 => 107,  119 => 106,  113 => 104,  111 => 103,  107 => 102,  104 => 101,  99 => 99,  93 => 98,  88 => 97,  86 => 96,  82 => 94,  76 => 91,  73 => 90,  71 => 89,  65 => 87,  60 => 81,  58 => 77,  57 => 76,  56 => 75,  55 => 72,  49 => 69,  47 => 68,  43 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/comment.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/comment.html.twig");
    }
}
