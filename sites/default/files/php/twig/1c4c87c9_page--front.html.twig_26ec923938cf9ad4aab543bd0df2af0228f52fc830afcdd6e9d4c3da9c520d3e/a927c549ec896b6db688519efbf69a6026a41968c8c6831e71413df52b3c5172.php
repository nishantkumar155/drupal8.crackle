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
                    <div class=\"six columns\">
                        ";
        // line 7
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array()))) {
            // line 8
            echo "                            <ul class=\"header_icon left\">
                                ";
            // line 9
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array())) {
                echo "<li><a href=\"#\" data-reveal-id=\"login_modal\"><i class=\"general foundicon-settings\"></i></a></li>";
            }
            // line 10
            echo "                                ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array())) {
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
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array())) {
            // line 15
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
            echo "
                        ";
        }
        // line 17
        echo "                    </div>
                    <div class=\"six columns\">
                        ";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array())) {
            // line 20
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()), "html", null, true));
            echo "
                        ";
        }
        // line 22
        echo "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"three columns branding\">
                    ";
        // line 27
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 28
            echo "                    <a href=\"";
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
                        ";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
            echo "
                        ";
            // line 32
            echo "                        ";
        }
        // line 33
        echo "                        ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 34
            echo "                            <div id=\"name-and-slogan\" ";
            if (((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null) && (isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null))) {
                echo " class=\"hidden\" ";
            }
            echo " >
                                ";
            // line 35
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 36
                echo "                                    <h1 id=\"main_title_text\" ";
                if ((isset($context["disable_site_name"]) ? $context["disable_site_name"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo ">
                                        <a href= \"";
                // line 37
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\"><span> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</span></a>
                                    </h1>
                                ";
            }
            // line 40
            echo "                                ";
            if ((isset($context["site_slogon"]) ? $context["site_slogon"] : null)) {
                // line 41
                echo "                                    <h2 id=\"main_title_slogan\" ";
                if ((isset($context["disable_site_slogan"]) ? $context["disable_site_slogan"] : null)) {
                    echo " class=\"hidden\" ";
                }
                echo " >
                                        ";
                // line 42
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "
                                    </h2>
                                ";
            }
            // line 45
            echo "                            </div>
                        ";
        }
        // line 47
        echo "                </div>
                ";
        // line 49
        echo "                <div class=\"nine columns\">
                    <div id=\"nav\">
                        ";
        // line 52
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
        // line 64
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array())) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 65
        echo "                            </section>
                        </nav>
                    </div>
                </div>
                ";
        // line 70
        echo "            </div>
        </div>
    </header>
    ";
        // line 74
        echo "    <div id=\"login_modal\" class=\"reveal-modal medium\">
        ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"contact_modal\" class=\"reveal-modal medium\">
        ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>



    <div class=\"row\">
        <div id=\"main_contain_wrap\"  class = \"";
        // line 86
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            echo " eight columns ";
        } else {
            echo " twelve columns ";
        }
        echo "\">
            <div id=\"main_content\" class=\"clearfix\">

                ";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                ";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
        echo "
            </div>
        </div>
        ";
        // line 93
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 94
            echo "            <div class=\"four columns\">
                <div id=\"sidebar_wrap\">
                    ";
            // line 96
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 97
                echo "                        <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 98
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 101
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 102
                echo "                        <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 103
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 106
            echo "                </div>
            </div>
        ";
        }
        // line 109
        echo "
    </div>

</div>
";
        // line 114
        echo "    ";
        // line 116
        echo "<div id=\"footer\">
    <div class=\"container\">
        ";
        // line 118
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()))) {
            // line 119
            echo "
            <div class=\"row\">
                <div class=\"three columns\">
                    ";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
            echo "
                </div>
                <div class=\"three columns\">
                    ";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 129
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 133
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 137
        echo "    </div>
    ";
        // line 138
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array())) {
            // line 139
            echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
            // line 141
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 145
        echo "</div>
";
        // line 146
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modal_markup", array()), "html", null, true));
        echo "
";
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
        return array (  347 => 146,  344 => 145,  337 => 141,  333 => 139,  331 => 138,  328 => 137,  321 => 133,  314 => 129,  307 => 125,  301 => 122,  296 => 119,  294 => 118,  290 => 116,  288 => 114,  282 => 109,  277 => 106,  271 => 103,  268 => 102,  265 => 101,  259 => 98,  256 => 97,  254 => 96,  250 => 94,  248 => 93,  242 => 90,  238 => 89,  228 => 86,  218 => 79,  211 => 75,  208 => 74,  203 => 70,  197 => 65,  191 => 64,  177 => 52,  173 => 49,  170 => 47,  166 => 45,  160 => 42,  153 => 41,  150 => 40,  140 => 37,  133 => 36,  131 => 35,  124 => 34,  121 => 33,  118 => 32,  114 => 30,  108 => 29,  101 => 28,  99 => 27,  92 => 22,  86 => 20,  84 => 19,  80 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }
}
/* <div id="main_wrapper">*/
/*     <header >*/
/*         <div class="container">*/
/*             <div id ="top_header">*/
/*                 <div class="row">*/
/*                     <div class="six columns">*/
/*                         {% if page.header_login or page.header_contact %}*/
/*                             <ul class="header_icon left">*/
/*                                 {% if page.header_login %}<li><a href="#" data-reveal-id="login_modal"><i class="general foundicon-settings"></i></a></li>{% endif %}*/
/*                                 {% if page.header_contact %}<li><a href="#" data-reveal-id="contact_modal"><i class="general foundicon-mail"></i></a></li>{% endif %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/* */
/*                         {% if page.header_top_left %}*/
/*                             {{ page.header_top_left }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="six columns">*/
/*                         {% if page.header_top_right %}*/
/*                             {{ page.header_top_right }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="three columns branding">*/
/*                     {% if logo %}*/
/*                     <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*                         <img src="{{ logo }}" alt="{{ 'Red Crackle Home'|t }}" />*/
/*                         {{ page.header_login }}*/
/*                         {#</a>#}*/
/*                         {% endif %}*/
/*                         {% if site_name or site_slogan %}*/
/*                             <div id="name-and-slogan" {% if disable_site_name and disable_site_slogan %} class="hidden" {% endif %} >*/
/*                                 {% if site_name %}*/
/*                                     <h1 id="main_title_text" {% if disable_site_name %} class="hidden" {% endif %}>*/
/*                                         <a href= "{{ front_page }}" title="{{ 'Home'|t }}" rel="home"><span> {{ site_name }}</span></a>*/
/*                                     </h1>*/
/*                                 {% endif %}*/
/*                                 {% if site_slogon %}*/
/*                                     <h2 id="main_title_slogan" {% if disable_site_slogan %} class="hidden" {% endif %} >*/
/*                                         {{  site_slogan }}*/
/*                                     </h2>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         {% endif %}*/
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
/*                                 {% if page.header_menu %} {{ page.header_menu }} {% endif %}*/
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
/*     <div id="contact_modal" class="reveal-modal medium">*/
/*         {{ page.header_contact }}*/
/*         <a class="close-reveal-modal">&#215;</a>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="row">*/
/*         <div id="main_contain_wrap"  class = "{% if page.sidebar_first or page.sidebar_second  %} eight columns {% else %} twelve columns {% endif %}">*/
/*             <div id="main_content" class="clearfix">*/
/* */
/*                 {{ page.content }}*/
/*                 {{ page.after_content }}*/
/*             </div>*/
/*         </div>*/
/*         {% if page.sidebar_first or page.sidebar_second %}*/
/*             <div class="four columns">*/
/*                 <div id="sidebar_wrap">*/
/*                     {% if page.sidebar_first %}*/
/*                         <aside id="sidebar-first" role="complementary" class="sidebar clearfix">*/
/*                             {{ page.sidebar_first }}*/
/*                         </aside>*/
/*                     {% endif %}*/
/*                     {% if page.sidebar_second %}*/
/*                         <aside id="sidebar-second" role="complementary" class="sidebar clearfix">*/
/*                             {{ page.sidebar_second }}*/
/*                         </aside>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* {#<div id="after-content">#}*/
/*     {#{{ page.after_content }}#}*/
/* {#</div>#}*/
/* <div id="footer">*/
/*     <div class="container">*/
/*         {% if page.footer_1 or page.footer_2 or page.footer_3 or page.footer_4 %}*/
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
/*     {% if page.footer_full  %}*/
/*         <div class="row">*/
/*             <div class="twelve columns">*/
/*                 {{ page.footer_full }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {{ page.modal_markup }}*/
/* */
