<?php

/* themes/redcrackle/template/page/page--front.html.twig */
class __TwigTemplate_00d93a70f3e6253840cbaf047914fa7a0c81d3961dda5ce4aed7b970c2febcd9 extends Twig_Template
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
        $tags = array("if" => 7);
        $filters = array("t" => 26);
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
        echo "<div id=\"main_wrapper\">
    <header >
        <div class=\"container\">
            <div id =\"top_header\">
                <div class=\"row\">
                    <div class=\"six column\">
                        ";
        // line 7
        if (((isset($context["header_login"]) ? $context["header_login"] : null) || (isset($context["header_contact"]) ? $context["header_contact"] : null))) {
            // line 8
            echo "                            <ul class=\"header_icon left\">
                                ";
            // line 9
            if ((isset($context["header_login"]) ? $context["header_login"] : null)) {
                echo "<li><a href=\"#\" data-reveal-id=\"login_modal\"><i class=\"general foundicon-settings\"></i></a></li>";
            }
            // line 10
            echo "                                ";
            if ((isset($context["header_contact"]) ? $context["header_contact"] : null)) {
                echo "<li><a href=\"#\" data-reveal-id=\"contact_modal\"><i class=\"general foundicon-mail\"></i></a></li>";
            }
            // line 11
            echo "                            </ul>
                        ";
        }
        // line 13
        echo "                    </div>
                    ";
        // line 14
        if ((isset($context["header_top_left"]) ? $context["header_top_left"] : null)) {
            // line 15
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
            echo "
                    ";
        }
        // line 17
        echo "                </div>

                ";
        // line 19
        if ((isset($context["header_top_right"]) ? $context["header_top_right"] : null)) {
            // line 20
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "right", array()), "html", null, true));
            echo "
                ";
        }
        // line 22
        echo "            </div>
            <div class=\"row\">
                <div class=\"three columns branding\">
                    ";
        // line 25
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 26
            echo "                        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\">
                            <img src=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Red Crackle Home")));
            echo "\" />
                        </a>
                    ";
        }
        // line 29
        echo " ";
        // line 30
        echo "                    ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 31
            echo "                        <div id=\"name-and-slogan\" ";
            if (((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null) && (isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null))) {
                echo " class=\"hidden\" ";
            }
            echo " >
                            ";
            // line 32
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 33
                echo "                                <h1 id=\"main_title_text\" ";
                if ((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo ">
                                    <a href= \"";
                // line 34
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\"><span> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</span></a>
                                </h1>
                            ";
            }
            // line 37
            echo "                            ";
            if ((isset($context["site_slogon"]) ? $context["site_slogon"] : null)) {
                // line 38
                echo "                                <h2 id=\"main_title_slogan\" ";
                if ((isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo " >
                                    ";
                // line 39
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "
                                </h2>
                            ";
            }
            // line 42
            echo "                        </div>
                    ";
        }
        // line 44
        echo "                </div>
                ";
        // line 46
        echo "                <div class=\"nine columns\">
                    <div id=\"nav\">
                        ";
        // line 49
        echo "                        <nav class=\"top-bar\">
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
        // line 61
        if ((isset($context["header_menu"]) ? $context["header_menu"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 62
        echo "                            </section>
                        </nav>
                    </div>
                </div>
                ";
        // line 67
        echo "            </div>
        </div>
    </header>
    ";
        // line 71
        echo "    <div id=\"login_modal\" class=\"reveal-modal medium\">
        ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"heading_wrapper\">
        ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_heading", array()), "html", null, true));
        echo "
        ";
        // line 78
        echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
        // line 81
        echo "                ";
        // line 82
        echo "                ";
        // line 83
        echo "                ";
        // line 84
        echo "                ";
        // line 85
        echo "                ";
        // line 86
        echo "            </div>
        </div>
        ";
        // line 89
        echo "
        <div class=\"row\">
            <div id=\"main_contain_wrap\"  class = \"";
        // line 91
        if (((isset($context["sidebar_first"]) ? $context["sidebar_first"] : null) || (isset($context["sidebar_second"]) ? $context["sidebar_second"] : null))) {
            echo " eight columns ";
        } else {
            echo " twelve columns ";
        }
        echo "\">
                ";
        // line 93
        echo "                ";
        // line 94
        echo "                ";
        // line 95
        echo "
                ";
        // line 97
        echo "                ";
        // line 98
        echo "                ";
        // line 99
        echo "                ";
        // line 100
        echo "                ";
        // line 101
        echo "                ";
        // line 102
        echo "                ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                ";
        // line 103
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 104
            echo "                    <div class=\"four columns\">
                        <div id=\"sidebar_wrap\">
                            ";
            // line 106
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 107
                echo "                                <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar clearfix\">
                                    ";
                // line 108
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
                                </aside>
                            ";
            }
            // line 111
            echo "                            ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 112
                echo "                                <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar clearfix\">
                                    ";
                // line 113
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
                                </aside>
                            ";
            }
            // line 116
            echo "                        </div>
                    </div>
                ";
        }
        // line 119
        echo "            </div>
        </div>
    </div>
</div>
<div id=\"after-content\">
    ";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
        echo "
</div>
<div id=\"footer\">
    <div class=\"container\">
        ";
        // line 128
        if (((((isset($context["footer_1"]) ? $context["footer_1"] : null) || (isset($context["footer_2"]) ? $context["footer_2"] : null)) || (isset($context["footer_3"]) ? $context["footer_3"] : null)) || (isset($context["footer_4"]) ? $context["footer_4"] : null))) {
            // line 129
            echo "
            <div class=\"row\">
                <div class=\"three columns\">
                    ";
            // line 132
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
            echo "
                </div>
                <div class=\"three columns\">
                    ";
            // line 135
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 143
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 147
        echo "    </div>
    ";
        // line 148
        if ((isset($context["footer_full"]) ? $context["footer_full"] : null)) {
            // line 149
            echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
            // line 151
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 155
        echo "</div>
";
        // line 156
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modal_markup", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 156,  367 => 155,  360 => 151,  356 => 149,  354 => 148,  351 => 147,  344 => 143,  337 => 139,  330 => 135,  324 => 132,  319 => 129,  317 => 128,  310 => 124,  303 => 119,  298 => 116,  292 => 113,  289 => 112,  286 => 111,  280 => 108,  277 => 107,  275 => 106,  271 => 104,  269 => 103,  264 => 102,  262 => 101,  260 => 100,  258 => 99,  256 => 98,  254 => 97,  251 => 95,  249 => 94,  247 => 93,  239 => 91,  235 => 89,  231 => 86,  229 => 85,  227 => 84,  225 => 83,  223 => 82,  221 => 81,  217 => 78,  213 => 76,  206 => 72,  203 => 71,  198 => 67,  192 => 62,  186 => 61,  172 => 49,  168 => 46,  165 => 44,  161 => 42,  155 => 39,  148 => 38,  145 => 37,  135 => 34,  128 => 33,  126 => 32,  119 => 31,  116 => 30,  114 => 29,  106 => 27,  99 => 26,  97 => 25,  92 => 22,  86 => 20,  84 => 19,  80 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }
}
/* <div id="main_wrapper">*/
/*     <header >*/
/*         <div class="container">*/
/*             <div id ="top_header">*/
/*                 <div class="row">*/
/*                     <div class="six column">*/
/*                         {% if header_login or header_contact %}*/
/*                             <ul class="header_icon left">*/
/*                                 {% if header_login %}<li><a href="#" data-reveal-id="login_modal"><i class="general foundicon-settings"></i></a></li>{% endif %}*/
/*                                 {% if header_contact %}<li><a href="#" data-reveal-id="contact_modal"><i class="general foundicon-mail"></i></a></li>{% endif %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% if header_top_left %}*/
/*                         {{ page.header_top_left }}*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 {% if header_top_right %}*/
/*                     {{ page.header_top.right }}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="three columns branding">*/
/*                     {% if logo %}*/
/*                         <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*                             <img src="{{ logo }}" alt="{{ 'Red Crackle Home'|t }}" />*/
/*                         </a>*/
/*                     {% endif %} {#end logo#}*/
/*                     {% if site_name or site_slogan %}*/
/*                         <div id="name-and-slogan" {% if disable_site_name and disable_site_slogan %} class="hidden" {% endif %} >*/
/*                             {% if site_name %}*/
/*                                 <h1 id="main_title_text" {% if disable_site_name %} class="hidden" {% endif %}>*/
/*                                     <a href= "{{ front_page }}" title="{{ 'Home'|t }}" rel="home"><span> {{ site_name }}</span></a>*/
/*                                 </h1>*/
/*                             {% endif %}*/
/*                             {% if site_slogon %}*/
/*                                 <h2 id="main_title_slogan" {% if disable_site_slogan %} class="hidden" {% endif %} >*/
/*                                     {{  site_slogan }}*/
/*                                 </h2>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {#end of branding#}*/
/*                 <div class="nine columns">*/
/*                     <div id="nav">*/
/*                         {#begin menu#}*/
/*                         <nav class="top-bar">*/
/*                             <ul class="left">*/
/*                                 <li class="name">*/
/*                                     <h1>*/
/*                                         <a href="#">*/
/*                                             Select a page*/
/*                                         </a>*/
/*                                     </h1>*/
/*                                 </li>*/
/*                                 <li class="toggle-topbar"><a href="#"></a></li>*/
/*                             </ul>*/
/*                             <section class="menu_wrap">*/
/*                                 {% if header_menu %} {{ page.header_menu }} {% endif %}*/
/*                             </section>*/
/*                         </nav>*/
/*                     </div>*/
/*                 </div>*/
/*                 {#end of menu#}*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     {# Header login modal (block region) #}*/
/*     <div id="login_modal" class="reveal-modal medium">*/
/*         {{ page.header_login }}*/
/*         <a class="close-reveal-modal">&#215;</a>*/
/*     </div>*/
/*     <div id="heading_wrapper">*/
/*         {{ page.page_heading }}*/
/*         {#{%  if  not ( drupal_is_front_page()) %}#}*/
/*         <div class="row">*/
/*             <div class="twelve columns">*/
/*                 {#<h2 class="page_heading_text"> {{  title }}</h2>#}*/
/*                 {#<div id="breadcrumbs">#}*/
/*                 {#<h3>{% if (theme_get_setting('breadcrumbs') == '1') %}#}*/
/*                 {#{% set {{ breadcrumb }} ~ {{ title }} %}#}*/
/*                 {#{% endif %}#}*/
/*                 {#</h3></div>#}*/
/*             </div>*/
/*         </div>*/
/*         {#{%  endif %}#}*/
/* */
/*         <div class="row">*/
/*             <div id="main_contain_wrap"  class = "{% if sidebar_first or sidebar_second  %} eight columns {% else %} twelve columns {% endif %}">*/
/*                 {#<div id="main_content" class="clearfix">#}*/
/*                 {#{{ title_prefix }}#}*/
/*                 {#{{ title_suffix }}#}*/
/* */
/*                 {#{{ page.help }}#}*/
/*                 {#{% if (action_link) %}#}*/
/*                 {#<ul class="action-links">#}*/
/*                 {#{{ pahe.action_link }}#}*/
/*                 {#</ul>#}*/
/*                 {#{% endif %}#}*/
/*                 {{ page.content }}*/
/*                 {% if page.sidebar_first or page.sidebar_second %}*/
/*                     <div class="four columns">*/
/*                         <div id="sidebar_wrap">*/
/*                             {% if page.sidebar_first %}*/
/*                                 <aside id="sidebar-first" role="complementary" class="sidebar clearfix">*/
/*                                     {{ page.sidebar_first }}*/
/*                                 </aside>*/
/*                             {% endif %}*/
/*                             {% if page.sidebar_second %}*/
/*                                 <aside id="sidebar-second" role="complementary" class="sidebar clearfix">*/
/*                                     {{ page.sidebar_second }}*/
/*                                 </aside>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div id="after-content">*/
/*     {{ page.after_content }}*/
/* </div>*/
/* <div id="footer">*/
/*     <div class="container">*/
/*         {% if footer_1 or footer_2 or footer_3 or footer_4 %}*/
/* */
/*             <div class="row">*/
/*                 <div class="three columns">*/
/*                     {{ page.footer_1 }}*/
/*                 </div>*/
/*                 <div class="three columns">*/
/*                     {{ page.footer_2 }}*/
/*                 </div>*/
/* */
/*                 <div class="three columns">*/
/*                     {{ page.footer_3 }}*/
/*                 </div>*/
/* */
/*                 <div class="three columns">*/
/*                     {{ page.footer_4 }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     {% if footer_full  %}*/
/*         <div class="row">*/
/*             <div class="twelve columns">*/
/*                 {{ page.footer_full }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {{ page.modal_markup }}*/
