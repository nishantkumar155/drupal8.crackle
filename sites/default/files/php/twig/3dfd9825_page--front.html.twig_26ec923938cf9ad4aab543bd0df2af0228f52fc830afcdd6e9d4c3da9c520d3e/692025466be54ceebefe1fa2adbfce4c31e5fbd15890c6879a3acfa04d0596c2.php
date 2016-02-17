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
        // line 28
        echo "                    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
        echo "\" rel=\"home\" id=\"logo\">
                    <img src=\"";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logopath"]) ? $context["logopath"] : null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Red Crackle Home")));
        echo "\" />
                    </a>
                    ";
        // line 32
        echo "                    ";
        // line 33
        echo "                    ";
        // line 34
        echo "                        ";
        // line 35
        echo "                        ";
        // line 36
        echo "
                        ";
        // line 38
        echo "                        ";
        // line 39
        echo "                        ";
        // line 40
        echo "                            ";
        // line 41
        echo "                                ";
        // line 42
        echo "                                    ";
        // line 43
        echo "                                        ";
        // line 44
        echo "                                    ";
        // line 45
        echo "                                ";
        // line 46
        echo "                                ";
        // line 47
        echo "                                    ";
        // line 48
        echo "                                        ";
        // line 49
        echo "                                    ";
        // line 50
        echo "                                ";
        // line 51
        echo "                            ";
        // line 52
        echo "                        ";
        // line 53
        echo "                </div>
                ";
        // line 55
        echo "                <div class=\"nine columns\">
                    <div id=\"nav\">
                        ";
        // line 58
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
        // line 70
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array())) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo " ";
        }
        // line 71
        echo "                            </section>
                        </nav>
                    </div>
                </div>
                ";
        // line 76
        echo "            </div>
        </div>
    </header>
    ";
        // line 80
        echo "    <div id=\"login_modal\" class=\"reveal-modal medium\">
        ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_login", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>
    <div id=\"contact_modal\" class=\"reveal-modal medium\">
        ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_contact", array()), "html", null, true));
        echo "
        <a class=\"close-reveal-modal\">&#215;</a>
    </div>



    <div class=\"row\">
        <div id=\"main_contain_wrap\"  class = \"";
        // line 92
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            echo " eight columns ";
        } else {
            echo " twelve columns ";
        }
        echo "\">
            <div id=\"main_content\" class=\"clearfix\">


                ";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "


                ";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content1", array()), "html", null, true));
        echo "


            </div>
        </div>
        ";
        // line 104
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 105
            echo "            <div class=\"four columns\">
                <div id=\"sidebar_wrap\">
                    ";
            // line 107
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 108
                echo "                        <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 109
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 112
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 113
                echo "                        <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar clearfix\">
                            ";
                // line 114
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
                        </aside>
                    ";
            }
            // line 117
            echo "                </div>
            </div>
        ";
        }
        // line 120
        echo "
    </div>

</div>
<div id=\"after-content\">
    ";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
        echo "
</div>
<div id=\"footer\">
    <div class=\"container\">
        ";
        // line 129
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()))) {
            // line 130
            echo "
            <div class=\"row\">
                <div class=\"three columns\">
                    ";
            // line 133
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_1", array()), "html", null, true));
            echo "
                </div>
                <div class=\"three columns\">
                    ";
            // line 136
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_2", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 140
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_3", array()), "html", null, true));
            echo "
                </div>

                <div class=\"three columns\">
                    ";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_4", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 148
        echo "    </div>
    ";
        // line 149
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array())) {
            // line 150
            echo "        <div class=\"row\">
            <div class=\"twelve columns\">
                ";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_full", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 156
        echo "</div>
";
        // line 157
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
        return array (  338 => 157,  335 => 156,  328 => 152,  324 => 150,  322 => 149,  319 => 148,  312 => 144,  305 => 140,  298 => 136,  292 => 133,  287 => 130,  285 => 129,  278 => 125,  271 => 120,  266 => 117,  260 => 114,  257 => 113,  254 => 112,  248 => 109,  245 => 108,  243 => 107,  239 => 105,  237 => 104,  229 => 99,  223 => 96,  212 => 92,  202 => 85,  195 => 81,  192 => 80,  187 => 76,  181 => 71,  175 => 70,  161 => 58,  157 => 55,  154 => 53,  152 => 52,  150 => 51,  148 => 50,  146 => 49,  144 => 48,  142 => 47,  140 => 46,  138 => 45,  136 => 44,  134 => 43,  132 => 42,  130 => 41,  128 => 40,  126 => 39,  124 => 38,  121 => 36,  119 => 35,  117 => 34,  115 => 33,  113 => 32,  106 => 29,  99 => 28,  92 => 22,  86 => 20,  84 => 19,  80 => 17,  74 => 15,  72 => 14,  69 => 13,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
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
/*                     {#{{ logopath }}#}*/
/*                     <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*                     <img src="{{ logopath }}" alt="{{ 'Red Crackle Home'|t }}" />*/
/*                     </a>*/
/*                     {#<img src="{{ logo }}" alt="{{ 'Home'|t }}" />#}*/
/*                     {#{% if logo %}#}*/
/*                     {#<a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">#}*/
/*                         {#<img src="{{ logopath }}" alt="{{ 'Red Crackle Home'|t }}" />#}*/
/*                         {#{{ page.header_login }}#}*/
/* */
/*                         {#</a>#}*/
/*                         {#{% endif %}#}*/
/*                         {#{% if site_name or site_slogan %}#}*/
/*                             {#<div id="name-and-slogan" {% if disable_site_name and disable_site_slogan %} class="hidden" {% endif %} >#}*/
/*                                 {#{% if site_name %}#}*/
/*                                     {#<h1 id="main_title_text" {% if disable_site_name %} class="hidden" {% endif %}>#}*/
/*                                         {#<a href= "{{ front_page }}" title="{{ 'Home'|t }}" rel="home"><span> {{ site_name }}</span></a>#}*/
/*                                     {#</h1>#}*/
/*                                 {#{% endif %}#}*/
/*                                 {#{% if site_slogon %}#}*/
/*                                     {#<h2 id="main_title_slogan" {% if disable_site_slogan %} class="hidden" {% endif %} >#}*/
/*                                         {#{{  site_slogan }}#}*/
/*                                     {#</h2>#}*/
/*                                 {#{% endif %}#}*/
/*                             {#</div>#}*/
/*                         {#{% endif %}#}*/
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
/* */
/*                 {{ page.content }}*/
/* */
/* */
/*                 {{ page.after_content1 }}*/
/* */
/* */
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
/* <div id="after-content">*/
/*     {{ page.after_content }}*/
/* </div>*/
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
