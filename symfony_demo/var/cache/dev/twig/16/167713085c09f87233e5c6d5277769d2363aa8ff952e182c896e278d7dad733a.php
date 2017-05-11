<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_172a9dcda483de96828ec634d8fb0999e80a84e62bf65b364c6b69d3d89cb558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94510c0bb4e4392aaab8e1d62ea37e3c29aa6907e8ebf07666a853e88efc2611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94510c0bb4e4392aaab8e1d62ea37e3c29aa6907e8ebf07666a853e88efc2611->enter($__internal_94510c0bb4e4392aaab8e1d62ea37e3c29aa6907e8ebf07666a853e88efc2611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0d9482b7901bbd90dc79e4c2003eb95cabf0cd3c99d7e681f5c0af88885be5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9482b7901bbd90dc79e4c2003eb95cabf0cd3c99d7e681f5c0af88885be5d5->enter($__internal_0d9482b7901bbd90dc79e4c2003eb95cabf0cd3c99d7e681f5c0af88885be5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94510c0bb4e4392aaab8e1d62ea37e3c29aa6907e8ebf07666a853e88efc2611->leave($__internal_94510c0bb4e4392aaab8e1d62ea37e3c29aa6907e8ebf07666a853e88efc2611_prof);

        
        $__internal_0d9482b7901bbd90dc79e4c2003eb95cabf0cd3c99d7e681f5c0af88885be5d5->leave($__internal_0d9482b7901bbd90dc79e4c2003eb95cabf0cd3c99d7e681f5c0af88885be5d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa41fbd4b41c7d857ea1eccc06feb14949237d5f24f22cb515601eb852746ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa41fbd4b41c7d857ea1eccc06feb14949237d5f24f22cb515601eb852746ce7->enter($__internal_fa41fbd4b41c7d857ea1eccc06feb14949237d5f24f22cb515601eb852746ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bda4f12db0f0a13e90480ff473435635416694128097fb1a99b9fb7e4dd05e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda4f12db0f0a13e90480ff473435635416694128097fb1a99b9fb7e4dd05e0e->enter($__internal_bda4f12db0f0a13e90480ff473435635416694128097fb1a99b9fb7e4dd05e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bda4f12db0f0a13e90480ff473435635416694128097fb1a99b9fb7e4dd05e0e->leave($__internal_bda4f12db0f0a13e90480ff473435635416694128097fb1a99b9fb7e4dd05e0e_prof);

        
        $__internal_fa41fbd4b41c7d857ea1eccc06feb14949237d5f24f22cb515601eb852746ce7->leave($__internal_fa41fbd4b41c7d857ea1eccc06feb14949237d5f24f22cb515601eb852746ce7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c31f0cc3b793b8f09a570c6429cc97d3e8d4292e9bffe813ef215d0b02240dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c31f0cc3b793b8f09a570c6429cc97d3e8d4292e9bffe813ef215d0b02240dd->enter($__internal_7c31f0cc3b793b8f09a570c6429cc97d3e8d4292e9bffe813ef215d0b02240dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93d2fd7f51c08be6e16736495fae38d60c6761beee4e49e0cb9c119e4ecf3bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d2fd7f51c08be6e16736495fae38d60c6761beee4e49e0cb9c119e4ecf3bf3->enter($__internal_93d2fd7f51c08be6e16736495fae38d60c6761beee4e49e0cb9c119e4ecf3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93d2fd7f51c08be6e16736495fae38d60c6761beee4e49e0cb9c119e4ecf3bf3->leave($__internal_93d2fd7f51c08be6e16736495fae38d60c6761beee4e49e0cb9c119e4ecf3bf3_prof);

        
        $__internal_7c31f0cc3b793b8f09a570c6429cc97d3e8d4292e9bffe813ef215d0b02240dd->leave($__internal_7c31f0cc3b793b8f09a570c6429cc97d3e8d4292e9bffe813ef215d0b02240dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e8f5ec6ce77827b3d97f1c15295a1cd71ea4f888f420a79badc213a53a0f313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8f5ec6ce77827b3d97f1c15295a1cd71ea4f888f420a79badc213a53a0f313->enter($__internal_8e8f5ec6ce77827b3d97f1c15295a1cd71ea4f888f420a79badc213a53a0f313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1a6e29a43b8ed64c746a52a0b9379ed9c3064f5e57cccee1ff907732e1c555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a6e29a43b8ed64c746a52a0b9379ed9c3064f5e57cccee1ff907732e1c555f->enter($__internal_f1a6e29a43b8ed64c746a52a0b9379ed9c3064f5e57cccee1ff907732e1c555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f1a6e29a43b8ed64c746a52a0b9379ed9c3064f5e57cccee1ff907732e1c555f->leave($__internal_f1a6e29a43b8ed64c746a52a0b9379ed9c3064f5e57cccee1ff907732e1c555f_prof);

        
        $__internal_8e8f5ec6ce77827b3d97f1c15295a1cd71ea4f888f420a79badc213a53a0f313->leave($__internal_8e8f5ec6ce77827b3d97f1c15295a1cd71ea4f888f420a79badc213a53a0f313_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
