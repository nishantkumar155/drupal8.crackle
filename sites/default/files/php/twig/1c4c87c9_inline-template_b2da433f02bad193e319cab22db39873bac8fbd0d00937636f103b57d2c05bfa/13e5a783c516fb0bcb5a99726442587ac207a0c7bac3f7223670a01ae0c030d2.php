<?php

/* {# inline_template_start #}<div class="tile {{ field_tile_size }} columns {{ field_tile_colours }}" >
<div class="services_content">  
		<div class="team_image"> 
		 	{{ field_image }}  </div>
   <div class="team_image_hover" style="opacity: 0;">
     <h3 class="image-tile-title">{{ title }}</h3>
       <p><a href="{{ field_tile_url }}"><i class="general foundicon-search"></i></a></p>
     </div>
   </div>  
 <a href="{{ field_tile_url }}" class=" {{ field_text_colours }} " >
   <div class="tile-title">{{ title }}</div>
	 <i class="{{ field_icon }}"></i>
 </a>	   
</div> */
class __TwigTemplate_f4c879f987d0e5f074fe6ee9edadc05d1f0fdb515d9e05a59ece7964ca04e925 extends Twig_Template
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
<div class=\"services_content\">  
\t\t<div class=\"team_image\"> 
\t\t \t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "  </div>
   <div class=\"team_image_hover\" style=\"opacity: 0;\">
     <h3 class=\"image-tile-title\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h3>
       <p><a href=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tile_url"]) ? $context["field_tile_url"] : null), "html", null, true));
        echo "\"><i class=\"general foundicon-search\"></i></a></p>
     </div>
   </div>  
 <a href=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tile_url"]) ? $context["field_tile_url"] : null), "html", null, true));
        echo "\" class=\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_text_colours"]) ? $context["field_text_colours"] : null), "html", null, true));
        echo " \" >
   <div class=\"tile-title\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
\t <i class=\"";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_icon"]) ? $context["field_icon"] : null), "html", null, true));
        echo "\"></i>
 </a>\t   
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"tile {{ field_tile_size }} columns {{ field_tile_colours }}\" >
<div class=\"services_content\">  
\t\t<div class=\"team_image\"> 
\t\t \t{{ field_image }}  </div>
   <div class=\"team_image_hover\" style=\"opacity: 0;\">
     <h3 class=\"image-tile-title\">{{ title }}</h3>
       <p><a href=\"{{ field_tile_url }}\"><i class=\"general foundicon-search\"></i></a></p>
     </div>
   </div>  
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
        return array (  90 => 12,  86 => 11,  80 => 10,  74 => 7,  70 => 6,  65 => 4,  56 => 1,);
    }
}
/* {# inline_template_start #}<div class="tile {{ field_tile_size }} columns {{ field_tile_colours }}" >*/
/* <div class="services_content">  */
/* 		<div class="team_image"> */
/* 		 	{{ field_image }}  </div>*/
/*    <div class="team_image_hover" style="opacity: 0;">*/
/*      <h3 class="image-tile-title">{{ title }}</h3>*/
/*        <p><a href="{{ field_tile_url }}"><i class="general foundicon-search"></i></a></p>*/
/*      </div>*/
/*    </div>  */
/*  <a href="{{ field_tile_url }}" class=" {{ field_text_colours }} " >*/
/*    <div class="tile-title">{{ title }}</div>*/
/* 	 <i class="{{ field_icon }}"></i>*/
/*  </a>	   */
/* </div>*/
