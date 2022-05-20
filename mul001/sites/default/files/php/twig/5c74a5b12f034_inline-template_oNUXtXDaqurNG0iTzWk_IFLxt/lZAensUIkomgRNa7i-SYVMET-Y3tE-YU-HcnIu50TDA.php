<?php

/* {# inline_template_start #}<div class="newsDate">{{ created }}<div class="tag tag-{{ tid }} ">{{ field_tags }}</div></div>
<div class="newsTitle"><a href="{{ view_node }}">{{ title }}</a></div> */
class __TwigTemplate_1c43bb72f9c4255d579bd1cc0dd79d3896af2d0d49c3bacb855da39f5c7b1d8c extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 1
        echo "<div class=\"newsDate\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "<div class=\"tag tag-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tid"] ?? null), "html", null, true));
        echo " \">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_tags"] ?? null), "html", null, true));
        echo "</div></div>
<div class=\"newsTitle\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"newsDate\">{{ created }}<div class=\"tag tag-{{ tid }} \">{{ field_tags }}</div></div>
<div class=\"newsTitle\"><a href=\"{{ view_node }}\">{{ title }}</a></div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 2,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<div class=\"newsDate\">{{ created }}<div class=\"tag tag-{{ tid }} \">{{ field_tags }}</div></div>
<div class=\"newsTitle\"><a href=\"{{ view_node }}\">{{ title }}</a></div>", "{# inline_template_start #}<div class=\"newsDate\">{{ created }}<div class=\"tag tag-{{ tid }} \">{{ field_tags }}</div></div>
<div class=\"newsTitle\"><a href=\"{{ view_node }}\">{{ title }}</a></div>", "");
    }
}
