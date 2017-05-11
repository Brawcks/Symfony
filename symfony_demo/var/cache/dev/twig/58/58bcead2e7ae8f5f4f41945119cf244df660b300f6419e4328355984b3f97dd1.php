<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_18fa13a347535718d99c46314bb025e7215bacdbbd8505b3115c76f80f4cb314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_52d4702dff567a8615f741aad7c306fce628c0cd3f0bc70a367893ea7967705d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d4702dff567a8615f741aad7c306fce628c0cd3f0bc70a367893ea7967705d->enter($__internal_52d4702dff567a8615f741aad7c306fce628c0cd3f0bc70a367893ea7967705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a9c0761768672df3bbc1faf270111cf397a7db0a409ec42cb42795838d26e8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c0761768672df3bbc1faf270111cf397a7db0a409ec42cb42795838d26e8ed->enter($__internal_a9c0761768672df3bbc1faf270111cf397a7db0a409ec42cb42795838d26e8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d4702dff567a8615f741aad7c306fce628c0cd3f0bc70a367893ea7967705d->leave($__internal_52d4702dff567a8615f741aad7c306fce628c0cd3f0bc70a367893ea7967705d_prof);

        
        $__internal_a9c0761768672df3bbc1faf270111cf397a7db0a409ec42cb42795838d26e8ed->leave($__internal_a9c0761768672df3bbc1faf270111cf397a7db0a409ec42cb42795838d26e8ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45cd579c850cd0d5a39539e52d90dcf0646a04067d6ef34f3cb0178e212004c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45cd579c850cd0d5a39539e52d90dcf0646a04067d6ef34f3cb0178e212004c2->enter($__internal_45cd579c850cd0d5a39539e52d90dcf0646a04067d6ef34f3cb0178e212004c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b3af074af3d87ad2cb7727ea2cda8986f7dcb75a825dc92a518a5617b6977002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3af074af3d87ad2cb7727ea2cda8986f7dcb75a825dc92a518a5617b6977002->enter($__internal_b3af074af3d87ad2cb7727ea2cda8986f7dcb75a825dc92a518a5617b6977002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b3af074af3d87ad2cb7727ea2cda8986f7dcb75a825dc92a518a5617b6977002->leave($__internal_b3af074af3d87ad2cb7727ea2cda8986f7dcb75a825dc92a518a5617b6977002_prof);

        
        $__internal_45cd579c850cd0d5a39539e52d90dcf0646a04067d6ef34f3cb0178e212004c2->leave($__internal_45cd579c850cd0d5a39539e52d90dcf0646a04067d6ef34f3cb0178e212004c2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_574008c59532747a29424fc518024ad8d2b4edc7b8c67e502217065ce653f83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574008c59532747a29424fc518024ad8d2b4edc7b8c67e502217065ce653f83b->enter($__internal_574008c59532747a29424fc518024ad8d2b4edc7b8c67e502217065ce653f83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c316a33c6b131f34ed879982c3f5e3a98288c40e8d5300936aab1162e3e79363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c316a33c6b131f34ed879982c3f5e3a98288c40e8d5300936aab1162e3e79363->enter($__internal_c316a33c6b131f34ed879982c3f5e3a98288c40e8d5300936aab1162e3e79363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c316a33c6b131f34ed879982c3f5e3a98288c40e8d5300936aab1162e3e79363->leave($__internal_c316a33c6b131f34ed879982c3f5e3a98288c40e8d5300936aab1162e3e79363_prof);

        
        $__internal_574008c59532747a29424fc518024ad8d2b4edc7b8c67e502217065ce653f83b->leave($__internal_574008c59532747a29424fc518024ad8d2b4edc7b8c67e502217065ce653f83b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1ff5a08a22620c4e92800ef26c4322921ed0397c0b1b71c96993a31c48273b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ff5a08a22620c4e92800ef26c4322921ed0397c0b1b71c96993a31c48273b2->enter($__internal_c1ff5a08a22620c4e92800ef26c4322921ed0397c0b1b71c96993a31c48273b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5362da4965668e7ee9612edc82ef8f22a1f5144b393fe1070552ee929751bad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5362da4965668e7ee9612edc82ef8f22a1f5144b393fe1070552ee929751bad3->enter($__internal_5362da4965668e7ee9612edc82ef8f22a1f5144b393fe1070552ee929751bad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5362da4965668e7ee9612edc82ef8f22a1f5144b393fe1070552ee929751bad3->leave($__internal_5362da4965668e7ee9612edc82ef8f22a1f5144b393fe1070552ee929751bad3_prof);

        
        $__internal_c1ff5a08a22620c4e92800ef26c4322921ed0397c0b1b71c96993a31c48273b2->leave($__internal_c1ff5a08a22620c4e92800ef26c4322921ed0397c0b1b71c96993a31c48273b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
