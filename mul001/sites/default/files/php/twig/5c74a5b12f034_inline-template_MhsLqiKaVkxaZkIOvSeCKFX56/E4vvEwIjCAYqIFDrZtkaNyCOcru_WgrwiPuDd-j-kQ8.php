<?php

/* {# inline_template_start #}{{ created }}<span class="tag tag-{{ tid }} ">{{ field_tags }}</span>
<div class="newslist-row">
  <a href="{{ view_node }}" class="newslist-img"> {{field_image}}</a>
 <div>
  <a href="{{ view_node }}"><h3>{{ title }}</h3>{{ body }}</a>
</div>
</div> */
class __TwigTemplate_779377be773449133e2b0c27e074d05c271e079ced1df45e8efb23ad70df8f39 extends Twig_Template
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "<span class=\"tag tag-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tid"] ?? null), "html", null, true));
        echo " \">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_tags"] ?? null), "html", null, true));
        echo "</span>
<div class=\"newslist-row\">
  <a href=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\" class=\"newslist-img\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "</a>
 <div>
  <a href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\"><h3>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h3>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</a>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ created }}<span class=\"tag tag-{{ tid }} \">{{ field_tags }}</span>
<div class=\"newslist-row\">
  <a href=\"{{ view_node }}\" class=\"newslist-img\"> {{field_image}}</a>
 <div>
  <a href=\"{{ view_node }}\"><h3>{{ title }}</h3>{{ body }}</a>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 5,  58 => 3,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}{{ created }}<span class=\"tag tag-{{ tid }} \">{{ field_tags }}</span>
<div class=\"newslist-row\">
  <a href=\"{{ view_node }}\" class=\"newslist-img\"> {{field_image}}</a>
 <div>
  <a href=\"{{ view_node }}\"><h3>{{ title }}</h3>{{ body }}</a>
</div>
</div>", "{# inline_template_start #}{{ created }}<span class=\"tag tag-{{ tid }} \">{{ field_tags }}</span>
<div class=\"newslist-row\">
  <a href=\"{{ view_node }}\" class=\"newslist-img\"> {{field_image}}</a>
 <div>
  <a href=\"{{ view_node }}\"><h3>{{ title }}</h3>{{ body }}</a>
</div>
</div>", "");
    }
}
