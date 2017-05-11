<?php

/* blog/post_show.html.twig */
class __TwigTemplate_6ca628c2e85984e39accd7537fb68b31b34a0eb839d25ac870c03189a2d8f36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747483c953add56437d13a8ba52fd827504e1ccaaa5bbf041c8edd08be020826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747483c953add56437d13a8ba52fd827504e1ccaaa5bbf041c8edd08be020826->enter($__internal_747483c953add56437d13a8ba52fd827504e1ccaaa5bbf041c8edd08be020826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $__internal_55bf7586818b22632cd86d3f07c65dda2004b9f89ece131c0f0ee8924738e919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bf7586818b22632cd86d3f07c65dda2004b9f89ece131c0f0ee8924738e919->enter($__internal_55bf7586818b22632cd86d3f07c65dda2004b9f89ece131c0f0ee8924738e919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747483c953add56437d13a8ba52fd827504e1ccaaa5bbf041c8edd08be020826->leave($__internal_747483c953add56437d13a8ba52fd827504e1ccaaa5bbf041c8edd08be020826_prof);

        
        $__internal_55bf7586818b22632cd86d3f07c65dda2004b9f89ece131c0f0ee8924738e919->leave($__internal_55bf7586818b22632cd86d3f07c65dda2004b9f89ece131c0f0ee8924738e919_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e3d8ec4b5d7a654b1bfaba123049623a6ee5732d71da9336d1cda3eae863c8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d8ec4b5d7a654b1bfaba123049623a6ee5732d71da9336d1cda3eae863c8d7->enter($__internal_e3d8ec4b5d7a654b1bfaba123049623a6ee5732d71da9336d1cda3eae863c8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f117d48020ff2a149d7dad780666b66ce4434e8c3cb06b0481cdb2cac4424112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f117d48020ff2a149d7dad780666b66ce4434e8c3cb06b0481cdb2cac4424112->enter($__internal_f117d48020ff2a149d7dad780666b66ce4434e8c3cb06b0481cdb2cac4424112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_post_show";
        
        $__internal_f117d48020ff2a149d7dad780666b66ce4434e8c3cb06b0481cdb2cac4424112->leave($__internal_f117d48020ff2a149d7dad780666b66ce4434e8c3cb06b0481cdb2cac4424112_prof);

        
        $__internal_e3d8ec4b5d7a654b1bfaba123049623a6ee5732d71da9336d1cda3eae863c8d7->leave($__internal_e3d8ec4b5d7a654b1bfaba123049623a6ee5732d71da9336d1cda3eae863c8d7_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b75907d7c8f0c1aaf9ab63a96d8ca1706fe6a7735ee730aafab8d7114cedbde9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75907d7c8f0c1aaf9ab63a96d8ca1706fe6a7735ee730aafab8d7114cedbde9->enter($__internal_b75907d7c8f0c1aaf9ab63a96d8ca1706fe6a7735ee730aafab8d7114cedbde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_389b55bda4d0f34285bf78807ef87e1585f771140caf3553aced4847418d8922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389b55bda4d0f34285bf78807ef87e1585f771140caf3553aced4847418d8922->enter($__internal_389b55bda4d0f34285bf78807ef87e1585f771140caf3553aced4847418d8922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "author", array()), "fullName", array()), "html", null, true);
        echo "</span>
    </p>

    ";
        // line 13
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()));
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 24
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:commentForm", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))));
            echo "
        ";
        } else {
            // line 27
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 34
        echo "    </div>

    <h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("post.num_comments", twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()))), "html", null, true);
        echo "</h3>

    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "        <div class=\"row post-comment\">
            <a name=\"comment_";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\"></a>
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "fullName", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.commented_on"), "html", null, true);
            echo "
                ";
            // line 46
            echo "                <strong>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["comment"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 49
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute($context["comment"], "content", array()));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "        <div class=\"post-comment\">
            <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_389b55bda4d0f34285bf78807ef87e1585f771140caf3553aced4847418d8922->leave($__internal_389b55bda4d0f34285bf78807ef87e1585f771140caf3553aced4847418d8922_prof);

        
        $__internal_b75907d7c8f0c1aaf9ab63a96d8ca1706fe6a7735ee730aafab8d7114cedbde9->leave($__internal_b75907d7c8f0c1aaf9ab63a96d8ca1706fe6a7735ee730aafab8d7114cedbde9_prof);

    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3e174647c86d50f3a9cc47161d21e926c4d98661b95cdb674d25a8316d570817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e174647c86d50f3a9cc47161d21e926c4d98661b95cdb674d25a8316d570817->enter($__internal_3e174647c86d50f3a9cc47161d21e926c4d98661b95cdb674d25a8316d570817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_43ec82f99894e34ec2a0f1180f661f5eaacdac4030ca59bcad29000e3dd4d51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ec82f99894e34ec2a0f1180f661f5eaacdac4030ca59bcad29000e3dd4d51c->enter($__internal_43ec82f99894e34ec2a0f1180f661f5eaacdac4030ca59bcad29000e3dd4d51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 60
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", ($context["post"] ?? $this->getContext($context, "post")))) {
            // line 61
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 67
        echo "
    ";
        // line 71
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 73
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
    ";
        // line 74
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_43ec82f99894e34ec2a0f1180f661f5eaacdac4030ca59bcad29000e3dd4d51c->leave($__internal_43ec82f99894e34ec2a0f1180f661f5eaacdac4030ca59bcad29000e3dd4d51c_prof);

        
        $__internal_3e174647c86d50f3a9cc47161d21e926c4d98661b95cdb674d25a8316d570817->leave($__internal_3e174647c86d50f3a9cc47161d21e926c4d98661b95cdb674d25a8316d570817_prof);

    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 74,  223 => 73,  217 => 71,  214 => 67,  207 => 63,  203 => 62,  200 => 61,  197 => 60,  188 => 59,  171 => 54,  168 => 53,  159 => 49,  152 => 46,  146 => 42,  141 => 40,  138 => 39,  133 => 38,  128 => 36,  124 => 34,  118 => 31,  113 => 29,  109 => 28,  106 => 27,  100 => 25,  97 => 24,  91 => 15,  86 => 13,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'blog_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
    </p>

    {{ post.content|md2html }}

    {{ include('blog/_post_tags.html.twig') }}

    <div id=\"post-add-comment\" class=\"well\">
        {# The 'IS_AUTHENTICATED_FULLY' role ensures that the user has entered
        his/her credentials (login + password) during this session. If he/she
        is automatically logged via the 'Remember Me' functionality, he/she won't
        be able to add a comment.
        See https://symfony.com/doc/current/cookbook/security/remember_me.html#forcing-the-user-to-re-authenticate-before-accessing-certain-resources
        #}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ render(controller('AppBundle:Blog:commentForm', {'id': post.id})) }}
        {% else %}
            <p>
                <a class=\"btn btn-success\" href=\"{{ path('security_login') }}\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                </a>
                {{ 'post.to_publish_a_comment'|trans }}
            </p>
        {% endif %}
    </div>

    <h3>{{ 'post.num_comments'|transchoice(post.comments|length) }}</h3>

    {% for comment in post.comments %}
        <div class=\"row post-comment\">
            <a name=\"comment_{{ comment.id }}\"></a>
            <h4 class=\"col-sm-3\">
                <strong>{{ comment.author.fullName }}</strong> {{ 'post.commented_on'|trans }}
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <strong>{{ comment.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</strong>
            </h4>
            <div class=\"col-sm-9\">
                {{ comment.content|md2html }}
            </div>
        </div>
    {% else %}
        <div class=\"post-comment\">
            <p>{{ 'post.no_comments'|trans }}</p>
        </div>
    {% endfor %}
{% endblock %}

{% block sidebar %}
    {% if is_granted('edit', post) %}
        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"{{ path('admin_post_edit', {id: post.id}) }}\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_post'|trans }}
            </a>
        </div>
    {% endif %}

    {# the parent() function includes the contents defined by the parent template
      ('base.html.twig') for this block ('sidebar'). This is a very convenient way
      to share common contents in different templates #}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/post_show.html.twig", "C:\\wamp64\\www\\demoSymfony\\symfony_demo\\app\\Resources\\views\\blog\\post_show.html.twig");
    }
}
