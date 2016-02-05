<?php

/* themes/redcrackle/template/views/views-view-fields.html.twig */
class __TwigTemplate_498e9cf045777795c0b72f3a23c8c917b8f6d3ba9fe06764aa7e2eb8992f5a13 extends Twig_Template
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
        $tags = array("for" => 1, "if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "separator", array()), "html", null, true));
            // line 3
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 4
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_attributes", array()), "html", null, true));
                echo ">";
            }
            // line 6
            if ($this->getAttribute($context["field"], "label", array())) {
                // line 7
                if ($this->getAttribute($context["field"], "label_element", array())) {
                    // line 8
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 10
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true));
                }
            }
            // line 13
            if ($this->getAttribute($context["field"], "element_type", array())) {
                // line 14
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo ">";
            } else {
                // line 16
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
            }
            // line 18
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 19
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo ">";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/views/views-view-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  92 => 18,  89 => 16,  79 => 14,  77 => 13,  72 => 10,  61 => 8,  59 => 7,  57 => 6,  51 => 4,  49 => 3,  47 => 2,  43 => 1,);
    }
}
/* {% for field in fields -%}*/
/*  {{ field.separator }}*/
/*  {%- if field.wrapper_element -%}*/
/*    <{{ field.wrapper_element }}{{ field.wrapper_attributes }}>*/
/*  {%- endif %}*/
/*  {%- if field.label -%}*/
/*    {%- if field.label_element -%}*/
/*      <{{ field.label_element }}{{ field.label_attributes }}>{{ field.label }}{{ field.label_suffix }}</{{ field.label_element }}>*/
/*    {%- else -%}*/
/*      {{ field.label }}{{ field.label_suffix }}*/
/*    {%- endif %}*/
/*  {%- endif %}*/
/*  {%- if field.element_type -%}*/
/*    <{{ field.element_type }}{{ field.element_attributes }}>{{ field.content }}</{{ field.element_type }}>*/
/*  {%- else -%}*/
/*    {{ field.content }}*/
/*  {%- endif %}*/
/*  {%- if field.wrapper_element -%}*/
/*    </{{ field.wrapper_element }}>*/
/*  {%- endif %}*/
/* {%- endfor %}*/
