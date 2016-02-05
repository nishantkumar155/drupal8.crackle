<?php

/* {# inline_template_start #}<div class="tile {{ field_tile_size }} columns {{ field_tile_colours }}" >
 <a href="{{ field_tile_url }}" class=" {{ field_text_colours }} " >
   <div class="tile-title">{{ title }}</div>
	 <i class="{{ field_icon }}"></i>
 </a>	   
</div> */
class __TwigTemplate_882fb4ddf5be290b4a0a8758f5c976a74813515539297314114cd117d73fbe07 extends Twig_Template
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
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        echo "<div class=\"tile ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tile_size"]) ? $context["field_tile_size"] : null), "html", null, true));
        echo " columns ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tile_colours"]) ? $context["field_tile_colours"] : null), "html", null, true));
        echo "\" >
 <a href=\"";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tile_url"]) ? $context["field_tile_url"] : null), "html", null, true));
        echo "\" class=\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_text_colours"]) ? $context["field_text_colours"] : null), "html", null, true));
        echo " \" >
   <div class=\"tile-title\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
\t <i class=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_icon"]) ? $context["field_icon"] : null), "html", null, true));
        echo "\"></i>
 </a>\t   
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"tile {{ field_tile_size }} columns {{ field_tile_colours }}\" >
 <a href=\"{{ field_tile_url }}\" class=\" {{ field_text_colours }} \" >
   <div class=\"tile-title\">{{ title }}</div>
\t <i class=\"{{ field_icon }}\"></i>
 </a>\t   
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 4,  61 => 3,  55 => 2,  48 => 1,);
    }
}
/* {# inline_template_start #}<div class="tile {{ field_tile_size }} columns {{ field_tile_colours }}" >*/
/*  <a href="{{ field_tile_url }}" class=" {{ field_text_colours }} " >*/
/*    <div class="tile-title">{{ title }}</div>*/
/* 	 <i class="{{ field_icon }}"></i>*/
/*  </a>	   */
/* </div>*/
