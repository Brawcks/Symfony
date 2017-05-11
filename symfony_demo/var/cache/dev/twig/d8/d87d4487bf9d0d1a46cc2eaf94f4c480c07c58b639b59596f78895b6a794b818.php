<?php

/* admin/layout.html.twig */
class __TwigTemplate_01f7a5abcb23c8c7356f71a06d936676eca76c3480da9f0ec360557c71f76e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 8);
        $this->blocks = array(
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1bc94aaaec1e3a545906abc214ae93c115f83a571b1cb460be12b5ecfde123b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bc94aaaec1e3a545906abc214ae93c115f83a571b1cb460be12b5ecfde123b->enter($__internal_e1bc94aaaec1e3a545906abc214ae93c115f83a571b1cb460be12b5ecfde123b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_5a062327de4854fd28c27a9191a6814413d1027f40e460b970779d4d71053786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a062327de4854fd28c27a9191a6814413d1027f40e460b970779d4d71053786->enter($__internal_5a062327de4854fd28c27a9191a6814413d1027f40e460b970779d4d71053786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1bc94aaaec1e3a545906abc214ae93c115f83a571b1cb460be12b5ecfde123b->leave($__internal_e1bc94aaaec1e3a545906abc214ae93c115f83a571b1cb460be12b5ecfde123b_prof);

        
        $__internal_5a062327de4854fd28c27a9191a6814413d1027f40e460b970779d4d71053786->leave($__internal_5a062327de4854fd28c27a9191a6814413d1027f40e460b970779d4d71053786_prof);

    }

    // line 10
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_9052d69ebc2f0b6183fe5b8cc28afac055cbb11e3dd6b1247058e02130247eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9052d69ebc2f0b6183fe5b8cc28afac055cbb11e3dd6b1247058e02130247eb7->enter($__internal_9052d69ebc2f0b6183fe5b8cc28afac055cbb11e3dd6b1247058e02130247eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_99f50b1a9fcbcaead4cc38e05990935b18215ddd1394c337e0a2010051db3f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f50b1a9fcbcaead4cc38e05990935b18215ddd1394c337e0a2010051db3f44->enter($__internal_99f50b1a9fcbcaead4cc38e05990935b18215ddd1394c337e0a2010051db3f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 11
        echo "    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
        echo "\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.post_list"), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.back_to_blog"), "html", null, true);
        echo "
        </a>
    </li>
";
        
        $__internal_99f50b1a9fcbcaead4cc38e05990935b18215ddd1394c337e0a2010051db3f44->leave($__internal_99f50b1a9fcbcaead4cc38e05990935b18215ddd1394c337e0a2010051db3f44_prof);

        
        $__internal_9052d69ebc2f0b6183fe5b8cc28afac055cbb11e3dd6b1247058e02130247eb7->leave($__internal_9052d69ebc2f0b6183fe5b8cc28afac055cbb11e3dd6b1247058e02130247eb7_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  63 => 17,  56 => 13,  52 => 12,  49 => 11,  40 => 10,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template of the all backend pages. Since this layout is similar
   to the global layout, we inherit from it to just change the contents of some
   blocks. In practice, backend templates are using a three-level inheritance,
   showing how powerful, yet easy to use, is Twig's inheritance mechanism.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
{% extends 'base.html.twig' %}

{% block header_navigation_links %}
    <li>
        <a href=\"{{ path('admin_post_index') }}\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> {{ 'menu.post_list'|trans }}
        </a>
    </li>
    <li>
        <a href=\"{{ path('blog_index') }}\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.back_to_blog'|trans }}
        </a>
    </li>
{% endblock %}
", "admin/layout.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\admin\\layout.html.twig");
    }
}
