<?php

/* security/login.html.twig */
class __TwigTemplate_dbd2cecf9edd6907c26131622fb6e16c413f2814a3d9f3f8a43388117bca49d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_872cc2b6ec04d64d25a354691d4bdc93f3becae3fc00b14a9a17d8369116042f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872cc2b6ec04d64d25a354691d4bdc93f3becae3fc00b14a9a17d8369116042f->enter($__internal_872cc2b6ec04d64d25a354691d4bdc93f3becae3fc00b14a9a17d8369116042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_bc8a47d082b6450dc23541598e0496abd2931a514600dc2a82332d6799546156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8a47d082b6450dc23541598e0496abd2931a514600dc2a82332d6799546156->enter($__internal_bc8a47d082b6450dc23541598e0496abd2931a514600dc2a82332d6799546156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872cc2b6ec04d64d25a354691d4bdc93f3becae3fc00b14a9a17d8369116042f->leave($__internal_872cc2b6ec04d64d25a354691d4bdc93f3becae3fc00b14a9a17d8369116042f_prof);

        
        $__internal_bc8a47d082b6450dc23541598e0496abd2931a514600dc2a82332d6799546156->leave($__internal_bc8a47d082b6450dc23541598e0496abd2931a514600dc2a82332d6799546156_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f6df946dd43fc63370324493b6f4c4cdeadcdb38d3b78b8695602a2bf387fb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6df946dd43fc63370324493b6f4c4cdeadcdb38d3b78b8695602a2bf387fb73->enter($__internal_f6df946dd43fc63370324493b6f4c4cdeadcdb38d3b78b8695602a2bf387fb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_5b1058525f5a873c8e79bdb8522ee66d5fa656c37bb9cfb828d379a9e62600c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1058525f5a873c8e79bdb8522ee66d5fa656c37bb9cfb828d379a9e62600c9->enter($__internal_5b1058525f5a873c8e79bdb8522ee66d5fa656c37bb9cfb828d379a9e62600c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_5b1058525f5a873c8e79bdb8522ee66d5fa656c37bb9cfb828d379a9e62600c9->leave($__internal_5b1058525f5a873c8e79bdb8522ee66d5fa656c37bb9cfb828d379a9e62600c9_prof);

        
        $__internal_f6df946dd43fc63370324493b6f4c4cdeadcdb38d3b78b8695602a2bf387fb73->leave($__internal_f6df946dd43fc63370324493b6f4c4cdeadcdb38d3b78b8695602a2bf387fb73_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_552b93bb6b8548b9baadd1665ac25abfa2b7eab7d8814f9e4738c40848551469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552b93bb6b8548b9baadd1665ac25abfa2b7eab7d8814f9e4738c40848551469->enter($__internal_552b93bb6b8548b9baadd1665ac25abfa2b7eab7d8814f9e4738c40848551469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_30e4c45431160d6339ad965e8e88f8a6a483d1b81c683915fad922fd15e7f04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e4c45431160d6339ad965e8e88f8a6a483d1b81c683915fad922fd15e7f04e->enter($__internal_30e4c45431160d6339ad965e8e88f8a6a483d1b81c683915fad922fd15e7f04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_30e4c45431160d6339ad965e8e88f8a6a483d1b81c683915fad922fd15e7f04e->leave($__internal_30e4c45431160d6339ad965e8e88f8a6a483d1b81c683915fad922fd15e7f04e_prof);

        
        $__internal_552b93bb6b8548b9baadd1665ac25abfa2b7eab7d8814f9e4738c40848551469->leave($__internal_552b93bb6b8548b9baadd1665ac25abfa2b7eab7d8814f9e4738c40848551469_prof);

    }

    // line 84
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ad08a67b06bb98a8318e8bc7825beae1d3234c1ff211cf434df65f535ffaf857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad08a67b06bb98a8318e8bc7825beae1d3234c1ff211cf434df65f535ffaf857->enter($__internal_ad08a67b06bb98a8318e8bc7825beae1d3234c1ff211cf434df65f535ffaf857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_4347324c68cfa4d98da4e4696ed86f7e7834e3b3009fc7a9087c2279e8ad7378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4347324c68cfa4d98da4e4696ed86f7e7834e3b3009fc7a9087c2279e8ad7378->enter($__internal_4347324c68cfa4d98da4e4696ed86f7e7834e3b3009fc7a9087c2279e8ad7378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 85
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 87
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_4347324c68cfa4d98da4e4696ed86f7e7834e3b3009fc7a9087c2279e8ad7378->leave($__internal_4347324c68cfa4d98da4e4696ed86f7e7834e3b3009fc7a9087c2279e8ad7378_prof);

        
        $__internal_ad08a67b06bb98a8318e8bc7825beae1d3234c1ff211cf434df65f535ffaf857->leave($__internal_ad08a67b06bb98a8318e8bc7825beae1d3234c1ff211cf434df65f535ffaf857_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82788a28e18485f52e93014a44bb83614c0ab8c2c3a7f4946011d23055d48d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82788a28e18485f52e93014a44bb83614c0ab8c2c3a7f4946011d23055d48d2b->enter($__internal_82788a28e18485f52e93014a44bb83614c0ab8c2c3a7f4946011d23055d48d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65dbd3b5fc31d9cf8eeab57d285d461b48cc06a83442994d5eca54842c2c0480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dbd3b5fc31d9cf8eeab57d285d461b48cc06a83442994d5eca54842c2c0480->enter($__internal_65dbd3b5fc31d9cf8eeab57d285d461b48cc06a83442994d5eca54842c2c0480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {
            var usernameEl = \$('#username');
            var passwordEl = \$('#password');
            // in a real application, hardcoding the user/password would be idiotic
            // but for the demo application it's very convenient to do so
            if (!usernameEl.val() && !passwordEl.val()) {
                usernameEl.val('jane_admin');
                passwordEl.val('kitten');
            }
        });
    </script>
";
        
        $__internal_65dbd3b5fc31d9cf8eeab57d285d461b48cc06a83442994d5eca54842c2c0480->leave($__internal_65dbd3b5fc31d9cf8eeab57d285d461b48cc06a83442994d5eca54842c2c0480_prof);

        
        $__internal_82788a28e18485f52e93014a44bb83614c0ab8c2c3a7f4946011d23055d48d2b->leave($__internal_82788a28e18485f52e93014a44bb83614c0ab8c2c3a7f4946011d23055d48d2b_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 91,  241 => 90,  229 => 87,  223 => 85,  214 => 84,  195 => 74,  191 => 73,  182 => 67,  178 => 66,  167 => 58,  159 => 53,  149 => 46,  145 => 45,  141 => 44,  132 => 38,  119 => 28,  114 => 26,  108 => 23,  102 => 20,  98 => 19,  93 => 17,  88 => 15,  82 => 11,  76 => 8,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'login' %}

{% block main %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('security_login') }}\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'title.login'|trans }}</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'label.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">{{ 'label.password'|trans }}</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                {{ 'help.login_users'|trans }}
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">{{ 'label.username'|trans }}</th>
                        <th scope=\"col\">{{ 'label.password'|trans }}</th>
                        <th scope=\"col\">{{ 'label.role'|trans }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> ({{ 'help.role_user'|trans }})</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> ({{ 'help.role_admin'|trans }})</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">{{ 'note'|trans }}</span>
                        {{ 'help.reload_fixtures'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">{{ 'tip'|trans }}</span>
                        {{ 'help.add_user'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        \$(document).ready(function() {
            var usernameEl = \$('#username');
            var passwordEl = \$('#password');
            // in a real application, hardcoding the user/password would be idiotic
            // but for the demo application it's very convenient to do so
            if (!usernameEl.val() && !passwordEl.val()) {
                usernameEl.val('jane_admin');
                passwordEl.val('kitten');
            }
        });
    </script>
{% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\security\\login.html.twig");
    }
}
