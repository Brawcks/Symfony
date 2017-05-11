<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5456808397e296b315179bb10b5946bc1cfc34ae3cd2a8c9743060312d692492 extends Twig_Template
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
        $__internal_6dfd37ad4693c76dade7950327be8c2a973215d47245aaa7e8f4b5339a47184f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfd37ad4693c76dade7950327be8c2a973215d47245aaa7e8f4b5339a47184f->enter($__internal_6dfd37ad4693c76dade7950327be8c2a973215d47245aaa7e8f4b5339a47184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7522e887b3f4ec79f7264a32d39a08a7c9ba273ffefe090b81c9fa676a36fc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7522e887b3f4ec79f7264a32d39a08a7c9ba273ffefe090b81c9fa676a36fc4d->enter($__internal_7522e887b3f4ec79f7264a32d39a08a7c9ba273ffefe090b81c9fa676a36fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6dfd37ad4693c76dade7950327be8c2a973215d47245aaa7e8f4b5339a47184f->leave($__internal_6dfd37ad4693c76dade7950327be8c2a973215d47245aaa7e8f4b5339a47184f_prof);

        
        $__internal_7522e887b3f4ec79f7264a32d39a08a7c9ba273ffefe090b81c9fa676a36fc4d->leave($__internal_7522e887b3f4ec79f7264a32d39a08a7c9ba273ffefe090b81c9fa676a36fc4d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
