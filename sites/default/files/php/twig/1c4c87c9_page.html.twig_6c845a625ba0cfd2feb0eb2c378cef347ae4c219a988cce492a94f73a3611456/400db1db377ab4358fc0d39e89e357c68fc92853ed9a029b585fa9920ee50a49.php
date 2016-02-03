<?php

/* themes/redcrackle/template/page/page.html.twig */
class __TwigTemplate_7864efd27c857666cd5f62a3f7d3bf8ab8a2bf8748ccfda25f1d5b4599ea45c7 extends Twig_Template
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
        $filters = array("t" => 28);
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
        echo "
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
        echo "                    </div>

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
        echo "                </div>
            </div>
            </div>
            <div class=\"row\">
                <div class=\"three columns branding\">
                    ";
        // line 27
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 28
            echo "                        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\">
                            <img src=\"";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Red Crackle Home")));
            echo "\" />
                        </a>
                    ";
        }
        // line 31
        echo " ";
        // line 32
        echo "                    ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 33
            echo "                        <div id=\"name-and-slogan\" ";
            if (((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null) && (isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null))) {
                echo " class=\"hidden\" ";
            }
            echo " >
                            ";
            // line 34
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 35
                echo "                                <h1 id=\"main_title_text\" ";
                if ((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo ">
                                    <a href= \"";
                // line 36
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\"><span> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</span></a>
                                </h1>
                            ";
            }
            // line 39
            echo "                            ";
            if ((isset($context["site_slogon"]) ? $context["site_slogon"] : null)) {
                // line 40
                echo "                                <h2 id=\"main_title_slogan\" ";
                if ((isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo " >
                                    ";
                // line 41
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "
                                </h2>
                            ";
            }
            // line 44
            echo "                        </div>
                    ";
        }
        // line 46
        echo "                </div>
                ";
        // line 48
        echo "                <div class=\"nine columns\">
                    <div id=\"nav\">
                        ";
        // line 51
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
        // line 63
        if ((isset($context["header_menu"]) ? $context["header_menu"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 64
        echo "                            </section>
                        </nav>
                    </div>
                </div>
                ";
        // line 69
        echo "            </div>
        </div>
    </header>
    ";
        // line 73
        echo "    <div id=\"login_modal\" class=\"reveal-modal medium\">
        ";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"heading_wrapper\">
        ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_heading", array()), "html", null, true));
        echo "
        ";
        // line 80
        echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
        // line 83
        echo "                ";
        // line 84
        echo "                ";
        // line 85
        echo "                ";
        // line 86
        echo "                ";
        // line 87
        echo "                ";
        // line 88
        echo "            </div>
        </div>
        ";
        // line 91
        echo "
    <div class=\"row\">
        <div id=\"main_contain_wrap\"  class = \"";
        // line 93
        if (((isset($context["sidebar_first"]) ? $context["sidebar_first"] : null) || (isset($context["sidebar_second"]) ? $context["sidebar_second"] : null))) {
            echo " eight columns ";
        } else {
            echo " twelve columns ";
        }
        echo "\">
        ";
        // line 95
        echo "            ";
        // line 96
        echo "            ";
        // line 97
        echo "
            ";
        // line 99
        echo "            ";
        // line 100
        echo "            ";
        // line 101
        echo "            ";
        // line 102
        echo "            ";
        // line 103
        echo "            ";
        // line 104
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            ";
        // line 105
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 106
            echo "                <div class=\"four columns\">
                    <div id=\"sidebar_wrap\">
                        ";
            // line 108
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 109
                echo "                            <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar clearfix\">
                                ";
                // line 110
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
                            </aside>
                        ";
            }
            // line 113
            echo "                        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 114
                echo "                            <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar clearfix\">
                                ";
                // line 115
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
                            </aside>
                        ";
            }
            // line 118
            echo "                    </div>
                </div>
            ";
        }
        // line 121
        echo "        </div>
        </div>
    </div>
</div>
<div id=\"after-content\">
            ";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
        echo "
</div>
<div id=\"footer\">
    <div class=\"container\">

        ";
        // line 131
        if (((((isset($context["footer_1"]) ? $context["footer_1"] : null) || (isset($context["footer_2"]) ? $context["footer_2"] : null)) || (isset($context["footer_3"]) ? $context["footer_3"] : null)) || (isset($context["footer_4"]) ? $context["footer_4"] : null))) {
            // line 132
            echo "
        <div class=\"row\">
            <div class=\"three columns\">
                ";
            // line 135
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
            echo "
            </div>
            <div class=\"three columns\">
                ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
            echo "
            </div>

            <div class=\"three columns\">
                ";
            // line 142
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
            echo "
            </div>

            <div class=\"three columns\">
                ";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
            echo "
            </div>
        </div>
        ";
        }
        // line 150
        echo "    </div>
      ";
        // line 151
        if ((isset($context["footer_full"]) ? $context["footer_full"] : null)) {
            // line 152
            echo "    <div class=\"row\">
        <div class=\"twelve columns\">
            ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array()), "html", null, true));
            echo "
        </div>
    </div>
    ";
        }
        // line 158
        echo "</div>
";
        // line 159
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modal_markup", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/redcrackle/template/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 159,  370 => 158,  363 => 154,  359 => 152,  357 => 151,  354 => 150,  347 => 146,  340 => 142,  333 => 138,  327 => 135,  322 => 132,  320 => 131,  312 => 126,  305 => 121,  300 => 118,  294 => 115,  291 => 114,  288 => 113,  282 => 110,  279 => 109,  277 => 108,  273 => 106,  271 => 105,  266 => 104,  264 => 103,  262 => 102,  260 => 101,  258 => 100,  256 => 99,  253 => 97,  251 => 96,  249 => 95,  241 => 93,  237 => 91,  233 => 88,  231 => 87,  229 => 86,  227 => 85,  225 => 84,  223 => 83,  219 => 80,  215 => 78,  208 => 74,  205 => 73,  200 => 69,  194 => 64,  188 => 63,  174 => 51,  170 => 48,  167 => 46,  163 => 44,  157 => 41,  150 => 40,  147 => 39,  137 => 36,  130 => 35,  128 => 34,  121 => 33,  118 => 32,  116 => 31,  108 => 29,  101 => 28,  99 => 27,  92 => 22,  86 => 20,  84 => 19,  80 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
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
/* */
/*                     {% if header_top_left %}*/
/*                         {{ page.header_top_left }}*/
/*                     {% endif %}*/
/*                     </div>*/
/* */
/*                 {% if header_top_right %}*/
/*                     {{ page.header_top.right }}*/
/*                 {% endif %}*/
/*                 </div>*/
/*             </div>*/
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
/*     <div class="row">*/
/*         <div id="main_contain_wrap"  class = "{% if sidebar_first or sidebar_second  %} eight columns {% else %} twelve columns {% endif %}">*/
/*         {#<div id="main_content" class="clearfix">#}*/
/*             {#{{ title_prefix }}#}*/
/*             {#{{ title_suffix }}#}*/
/* */
/*             {#{{ page.help }}#}*/
/*             {#{% if (action_link) %}#}*/
/*             {#<ul class="action-links">#}*/
/*             {#{{ pahe.action_link }}#}*/
/*             {#</ul>#}*/
/*             {#{% endif %}#}*/
/*             {{ page.content }}*/
/*             {% if page.sidebar_first or page.sidebar_second %}*/
/*                 <div class="four columns">*/
/*                     <div id="sidebar_wrap">*/
/*                         {% if page.sidebar_first %}*/
/*                             <aside id="sidebar-first" role="complementary" class="sidebar clearfix">*/
/*                                 {{ page.sidebar_first }}*/
/*                             </aside>*/
/*                         {% endif %}*/
/*                         {% if page.sidebar_second %}*/
/*                             <aside id="sidebar-second" role="complementary" class="sidebar clearfix">*/
/*                                 {{ page.sidebar_second }}*/
/*                             </aside>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div id="after-content">*/
/*             {{ page.after_content }}*/
/* </div>*/
/* <div id="footer">*/
/*     <div class="container">*/
/* */
/*         {% if footer_1 or footer_2 or footer_3 or footer_4 %}*/
/* */
/*         <div class="row">*/
/*             <div class="three columns">*/
/*                 {{ page.footer_1 }}*/
/*             </div>*/
/*             <div class="three columns">*/
/*                 {{ page.footer_2 }}*/
/*             </div>*/
/* */
/*             <div class="three columns">*/
/*                 {{ page.footer_3 }}*/
/*             </div>*/
/* */
/*             <div class="three columns">*/
/*                 {{ page.footer_4 }}*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/*       {% if footer_full  %}*/
/*     <div class="row">*/
/*         <div class="twelve columns">*/
/*             {{ page.footer_full }}*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/* </div>*/
/* {{ page.modal_markup }}*/
