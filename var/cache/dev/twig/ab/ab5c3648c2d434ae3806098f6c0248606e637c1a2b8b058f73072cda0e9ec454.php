<?php

/* AppBundle:pages:edit.html.twig */
class __TwigTemplate_d4040176066ffc42bb801c4f029feb2bb0e094e6fd06e7e0febaf4beccbe2950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65f2a75cb7c084a554110829eeae20f6461799d98cabbb4eba3e31b5844ed6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f2a75cb7c084a554110829eeae20f6461799d98cabbb4eba3e31b5844ed6fd->enter($__internal_65f2a75cb7c084a554110829eeae20f6461799d98cabbb4eba3e31b5844ed6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:edit.html.twig"));

        $__internal_531b942966ca2e640147c03a95add8cb0b30186573108a9924b8db0e9469ab76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531b942966ca2e640147c03a95add8cb0b30186573108a9924b8db0e9469ab76->enter($__internal_531b942966ca2e640147c03a95add8cb0b30186573108a9924b8db0e9469ab76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f2a75cb7c084a554110829eeae20f6461799d98cabbb4eba3e31b5844ed6fd->leave($__internal_65f2a75cb7c084a554110829eeae20f6461799d98cabbb4eba3e31b5844ed6fd_prof);

        
        $__internal_531b942966ca2e640147c03a95add8cb0b30186573108a9924b8db0e9469ab76->leave($__internal_531b942966ca2e640147c03a95add8cb0b30186573108a9924b8db0e9469ab76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21f0ffc7dd2f0ee594d4bda9cbe627631f5d95733a46d9eac85ab1a45ce88d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f0ffc7dd2f0ee594d4bda9cbe627631f5d95733a46d9eac85ab1a45ce88d1f->enter($__internal_21f0ffc7dd2f0ee594d4bda9cbe627631f5d95733a46d9eac85ab1a45ce88d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_984d1517810111b0fdf42600df4e8595cacdd3dab9d62bb9aab88a6241e38753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984d1517810111b0fdf42600df4e8595cacdd3dab9d62bb9aab88a6241e38753->enter($__internal_984d1517810111b0fdf42600df4e8595cacdd3dab9d62bb9aab88a6241e38753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Update a trick - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_984d1517810111b0fdf42600df4e8595cacdd3dab9d62bb9aab88a6241e38753->leave($__internal_984d1517810111b0fdf42600df4e8595cacdd3dab9d62bb9aab88a6241e38753_prof);

        
        $__internal_21f0ffc7dd2f0ee594d4bda9cbe627631f5d95733a46d9eac85ab1a45ce88d1f->leave($__internal_21f0ffc7dd2f0ee594d4bda9cbe627631f5d95733a46d9eac85ab1a45ce88d1f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b50a062660ece5effa92e3022cdac5a4321d9bd50f1c1453a073e78957a1053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b50a062660ece5effa92e3022cdac5a4321d9bd50f1c1453a073e78957a1053->enter($__internal_7b50a062660ece5effa92e3022cdac5a4321d9bd50f1c1453a073e78957a1053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0c55299ab239ca6add7c40a58e26786f1a6d6864aec5554a2e1fb1542bb6406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c55299ab239ca6add7c40a58e26786f1a6d6864aec5554a2e1fb1542bb6406->enter($__internal_a0c55299ab239ca6add7c40a58e26786f1a6d6864aec5554a2e1fb1542bb6406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Update a trick</h3>

        ";
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "jquery.collection.html.twig"));
        // line 11
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "



    <p>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "slug", array()))), "html", null, true);
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to the trick
        </a>
    </p>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$('.images-collection, .videos-collection').collection({
            allow_up: false,
            allow_down: false,
            add: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">add</i></span></a>',
            remove: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">delete</i><span class=\"glyphicon glyphicon-trash\"></span></a>'
        });
    </script>
";
        
        $__internal_a0c55299ab239ca6add7c40a58e26786f1a6d6864aec5554a2e1fb1542bb6406->leave($__internal_a0c55299ab239ca6add7c40a58e26786f1a6d6864aec5554a2e1fb1542bb6406_prof);

        
        $__internal_7b50a062660ece5effa92e3022cdac5a4321d9bd50f1c1453a073e78957a1053->leave($__internal_7b50a062660ece5effa92e3022cdac5a4321d9bd50f1c1453a073e78957a1053_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  95 => 21,  87 => 16,  78 => 11,  76 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    Update a trick - {{ parent() }}
{% endblock %}

{% block body %}
    <h3>Update a trick</h3>

        {% form_theme form 'jquery.collection.html.twig' %}
        {{ form(form) }}



    <p>
        <a href=\"{{ path('view', {'slug': trick.slug}) }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to the trick
        </a>
    </p>

    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.collection.js') }}\"></script>

    <script type=\"text/javascript\">
        \$('.images-collection, .videos-collection').collection({
            allow_up: false,
            allow_down: false,
            add: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">add</i></span></a>',
            remove: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">delete</i><span class=\"glyphicon glyphicon-trash\"></span></a>'
        });
    </script>
{% endblock %}

", "AppBundle:pages:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/edit.html.twig");
    }
}
