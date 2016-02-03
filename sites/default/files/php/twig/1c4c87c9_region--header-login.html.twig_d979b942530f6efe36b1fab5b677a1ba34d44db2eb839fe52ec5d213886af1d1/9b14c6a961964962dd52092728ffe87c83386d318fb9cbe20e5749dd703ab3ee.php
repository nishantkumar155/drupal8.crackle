<?php

/* themes/redcrackle/template/page/region--header-login.html.twig */
class __TwigTemplate_f1d6e029b70b1711b270d4379641f89fe107a739c69780a1eb4cec9319cb50b4 extends Twig_Template
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
        $tags = array("if" => 5);
        $filters = array("t" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        echo "<div class=\"container\">
    <div id =\"top_header\">
        <div class=\"row\">
            <div class=\"six column\">
                ";
        // line 5
        if (((isset($context["header_login"]) ? $context["header_login"] : null) || (isset($context["header_contact"]) ? $context["header_contact"] : null))) {
            // line 6
            echo "                    <ul class=\"header_icon left\">
                        ";
            // line 7
            if ((isset($context["header_login"]) ? $context["header_login"] : null)) {
                echo "<li><a href=\"#\" data-reveal-id=\"login_modal\"><i class=\"general foundicon-settings\"></i></a></li>";
            }
            // line 8
            echo "                        ";
            if ((isset($context["header_contact"]) ? $context["header_contact"] : null)) {
                echo "<li><a href=\"#\" data-reveal-id=\"contact_modal\"><i class=\"general foundicon-mail\"></i></a></li>";
            }
            // line 9
            echo "                    </ul>
                ";
        }
        // line 11
        echo "            </div>
            ";
        // line 12
        if ((isset($context["header_top_left"]) ? $context["header_top_left"] : null)) {
            // line 13
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
            echo "
            ";
        }
        // line 15
        echo "        </div>

        ";
        // line 17
        if ((isset($context["header_top_right"]) ? $context["header_top_right"] : null)) {
            // line 18
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "right", array()), "html", null, true));
            echo "
        ";
        }
        // line 20
        echo "    </div>
    <div class=\"row\">
        <div class=\"three columns branding\">
            ";
        // line 23
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 24
            echo "                <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\">
                    <img src=\"";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Red Crackle Home")));
            echo "\" />
                </a>
            ";
        }
        // line 27
        echo " ";
        // line 28
        echo "            ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 29
            echo "                <div id=\"name-and-slogan\" ";
            if (((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null) && (isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null))) {
                echo " class=\"hidden\" ";
            }
            echo " >
                    ";
            // line 30
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 31
                echo "                        <h1 id=\"main_title_text\" ";
                if ((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo ">
                            <a href= \"";
                // line 32
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\"><span> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</span></a>
                        </h1>
                    ";
            }
            // line 35
            echo "                    ";
            if ((isset($context["site_slogon"]) ? $context["site_slogon"] : null)) {
                // line 36
                echo "                        <h2 id=\"main_title_slogan\" ";
                if ((isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo " >
                            ";
                // line 37
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "
                        </h2>
                    ";
            }
            // line 40
            echo "                </div>
            ";
        }
        // line 42
        echo "        </div>
        ";
        // line 44
        echo "        <div class=\"nine columns\">
            <div id=\"nav\">
                ";
        // line 47
        echo "                <nav class=\"top-bar\">
                    <ul class=\"left\">
                        <li class=\"name\">
                            <h1>
                                <a href=\"#\">
                                    Select a page
                                </a>
                            </h1>
                        </li>
                        <li class=\"toggle-topbar\"><a href=\"#\"></a></li>
                    </ul>
                    <section class=\"menu_wrap\">
                        ";
        // line 59
        if ((isset($context["header_menu"]) ? $context["header_menu"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 60
        echo "                    </section>
                </nav>
            </div>
        </div>
        ";
        // line 65
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/page/region--header-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 65,  190 => 60,  184 => 59,  170 => 47,  166 => 44,  163 => 42,  159 => 40,  153 => 37,  146 => 36,  143 => 35,  133 => 32,  126 => 31,  124 => 30,  117 => 29,  114 => 28,  112 => 27,  104 => 25,  97 => 24,  95 => 23,  90 => 20,  84 => 18,  82 => 17,  78 => 15,  72 => 13,  70 => 12,  67 => 11,  63 => 9,  58 => 8,  54 => 7,  51 => 6,  49 => 5,  43 => 1,);
    }
}
/* <div class="container">*/
/*     <div id ="top_header">*/
/*         <div class="row">*/
/*             <div class="six column">*/
/*                 {% if header_login or header_contact %}*/
/*                     <ul class="header_icon left">*/
/*                         {% if header_login %}<li><a href="#" data-reveal-id="login_modal"><i class="general foundicon-settings"></i></a></li>{% endif %}*/
/*                         {% if header_contact %}<li><a href="#" data-reveal-id="contact_modal"><i class="general foundicon-mail"></i></a></li>{% endif %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% if header_top_left %}*/
/*                 {{ page.header_top_left }}*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if header_top_right %}*/
/*             {{ page.header_top.right }}*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="three columns branding">*/
/*             {% if logo %}*/
/*                 <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*                     <img src="{{ logo }}" alt="{{ 'Red Crackle Home'|t }}" />*/
/*                 </a>*/
/*             {% endif %} {#end logo#}*/
/*             {% if site_name or site_slogan %}*/
/*                 <div id="name-and-slogan" {% if disable_site_name and disable_site_slogan %} class="hidden" {% endif %} >*/
/*                     {% if site_name %}*/
/*                         <h1 id="main_title_text" {% if disable_site_name %} class="hidden" {% endif %}>*/
/*                             <a href= "{{ front_page }}" title="{{ 'Home'|t }}" rel="home"><span> {{ site_name }}</span></a>*/
/*                         </h1>*/
/*                     {% endif %}*/
/*                     {% if site_slogon %}*/
/*                         <h2 id="main_title_slogan" {% if disable_site_slogan %} class="hidden" {% endif %} >*/
/*                             {{  site_slogan }}*/
/*                         </h2>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         {#end of branding#}*/
/*         <div class="nine columns">*/
/*             <div id="nav">*/
/*                 {#begin menu#}*/
/*                 <nav class="top-bar">*/
/*                     <ul class="left">*/
/*                         <li class="name">*/
/*                             <h1>*/
/*                                 <a href="#">*/
/*                                     Select a page*/
/*                                 </a>*/
/*                             </h1>*/
/*                         </li>*/
/*                         <li class="toggle-topbar"><a href="#"></a></li>*/
/*                     </ul>*/
/*                     <section class="menu_wrap">*/
/*                         {% if header_menu %} {{ page.header_menu }} {% endif %}*/
/*                     </section>*/
/*                 </nav>*/
/*             </div>*/
/*         </div>*/
/*         {#end of menu#}*/
/*     </div>*/
/* </div>*/
