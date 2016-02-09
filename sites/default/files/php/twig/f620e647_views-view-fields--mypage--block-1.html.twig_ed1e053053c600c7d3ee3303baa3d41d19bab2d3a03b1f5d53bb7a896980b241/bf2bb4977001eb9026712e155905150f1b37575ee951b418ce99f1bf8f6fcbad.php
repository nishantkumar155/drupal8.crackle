<?php

/* themes/redcrackle/template/page/views-view-fields--mypage--block-1.html.twig */
class __TwigTemplate_1ac2e3a56e43384ad60e9a30aff139a9396f7179a5a1b419f1b3744cf2768075 extends Twig_Template
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

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "        ";
        // line 11
        echo "    ";
        // line 15
        echo "
<div class=\"tile ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_tile_size", array()), "content", array()), "html", null, true));
        echo " columns ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_tile_colours", array()), "content", array()), "html", null, true));
        echo "\" >
    <div class=\"services_content\">
        <div class=\"team_image\">


            ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
        echo "  </div>
        <div class=\"team_image_hover\" style=\"opacity: 0;\">
            <h3 class=\"image-tile-title\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</h3>
            <p><a href=\"";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_tile_url", array()), "content", array()), "html", null, true));
        echo "\"><i class=\"general foundicon-search\"></i></a></p>
        </div>
    </div>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_tile_url", array()), "content", array()), "html", null, true));
        echo "\" class=\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text_colours", array()), "content", array()), "html", null, true));
        echo " \" >
        <div class=\"tile-title\">";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</div>
        <i class=\"";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_icon", array()), "content", array()), "html", null, true));
        echo "\"></i>
    </a>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/page/views-view-fields--mypage--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  97 => 28,  91 => 27,  85 => 24,  81 => 23,  76 => 21,  66 => 16,  63 => 15,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  43 => 2,);
    }
}
/* {#{% for row in rows %}#}*/
/*     {#{%#}*/
/*     {#set row_classes = [#}*/
/*     {#default_row_class ? 'views-row',#}*/
/*     {#]#}*/
/*     {#%}#}*/
/*     {#{{ kint(row) }} &#123;&#35; devel &#35;&#125;#}*/
/*     {#<h2> {{row.content['#node'].getTitle()}} </h2> &#123;&#35; access fields &#35;&#125;#}*/
/*     {#<div{{ row.attributes.addClass(row_classes) }}>#}*/
/*         {#{{ row.content.field_image }}#}*/
/*     {#</div>#}*/
/* {#{% endfor %}#}*/
/* {#nishant {{ field_image }}#}*/
/* {#<h1>{{ fields.title.content }}</h1>#}*/
/* */
/* <div class="tile {{ fields.field_tile_size.content }} columns {{ fields.field_tile_colours.content }}" >*/
/*     <div class="services_content">*/
/*         <div class="team_image">*/
/* */
/* */
/*             {{ fields.field_image.content }}  </div>*/
/*         <div class="team_image_hover" style="opacity: 0;">*/
/*             <h3 class="image-tile-title">{{ fields.title.content  }}</h3>*/
/*             <p><a href="{{ fields.field_tile_url.content }}"><i class="general foundicon-search"></i></a></p>*/
/*         </div>*/
/*     </div>*/
/*     <a href="{{ fields.field_tile_url.content }}" class=" {{ fields.field_text_colours.content }} " >*/
/*         <div class="tile-title">{{ fields.title.content }}</div>*/
/*         <i class="{{ fields.field_icon.content }}"></i>*/
/*     </a>*/
/* </div>*/
/* */
/* {#{{ dump() }}#}*/
