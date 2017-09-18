<?php

/* ::base.html.twig */
class __TwigTemplate_fd2866f57d6bf127c645f28be59ccbee40ea71826226d3a4cd0c0744e3cd6f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6340e8b024cdc8db7239c3ae45f8f5a79cbb093bda57da776c59988dfe8ae52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6340e8b024cdc8db7239c3ae45f8f5a79cbb093bda57da776c59988dfe8ae52b->enter($__internal_6340e8b024cdc8db7239c3ae45f8f5a79cbb093bda57da776c59988dfe8ae52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6108ebb659f5097e9bf7199add1abd95036c79041f77c394b0fe7c9f7b61b22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6108ebb659f5097e9bf7199add1abd95036c79041f77c394b0fe7c9f7b61b22a->enter($__internal_6108ebb659f5097e9bf7199add1abd95036c79041f77c394b0fe7c9f7b61b22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6340e8b024cdc8db7239c3ae45f8f5a79cbb093bda57da776c59988dfe8ae52b->leave($__internal_6340e8b024cdc8db7239c3ae45f8f5a79cbb093bda57da776c59988dfe8ae52b_prof);

        
        $__internal_6108ebb659f5097e9bf7199add1abd95036c79041f77c394b0fe7c9f7b61b22a->leave($__internal_6108ebb659f5097e9bf7199add1abd95036c79041f77c394b0fe7c9f7b61b22a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39fb556e4a2b25a4f55632febff4449db36335573126823ce72f3ed01e218853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fb556e4a2b25a4f55632febff4449db36335573126823ce72f3ed01e218853->enter($__internal_39fb556e4a2b25a4f55632febff4449db36335573126823ce72f3ed01e218853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c0e56f109b4938def09d6003b26f879be57a43c3c797a9ffb30cecb2c026b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0e56f109b4938def09d6003b26f879be57a43c3c797a9ffb30cecb2c026b82->enter($__internal_3c0e56f109b4938def09d6003b26f879be57a43c3c797a9ffb30cecb2c026b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c0e56f109b4938def09d6003b26f879be57a43c3c797a9ffb30cecb2c026b82->leave($__internal_3c0e56f109b4938def09d6003b26f879be57a43c3c797a9ffb30cecb2c026b82_prof);

        
        $__internal_39fb556e4a2b25a4f55632febff4449db36335573126823ce72f3ed01e218853->leave($__internal_39fb556e4a2b25a4f55632febff4449db36335573126823ce72f3ed01e218853_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44cb978e8ace8cd7e54fc3fdfacceb1965fa8e83128e60a9a82dbffe14752d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cb978e8ace8cd7e54fc3fdfacceb1965fa8e83128e60a9a82dbffe14752d5d->enter($__internal_44cb978e8ace8cd7e54fc3fdfacceb1965fa8e83128e60a9a82dbffe14752d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2b26ecf74ec69ae3c09df9b7bcb854aaf7c247a2a3d832510fa52f1a4b78072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b26ecf74ec69ae3c09df9b7bcb854aaf7c247a2a3d832510fa52f1a4b78072->enter($__internal_b2b26ecf74ec69ae3c09df9b7bcb854aaf7c247a2a3d832510fa52f1a4b78072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b2b26ecf74ec69ae3c09df9b7bcb854aaf7c247a2a3d832510fa52f1a4b78072->leave($__internal_b2b26ecf74ec69ae3c09df9b7bcb854aaf7c247a2a3d832510fa52f1a4b78072_prof);

        
        $__internal_44cb978e8ace8cd7e54fc3fdfacceb1965fa8e83128e60a9a82dbffe14752d5d->leave($__internal_44cb978e8ace8cd7e54fc3fdfacceb1965fa8e83128e60a9a82dbffe14752d5d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d080e7c0b35118152bab7e9c724c7996cb9cb9c463549676c5993e96d2c11a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d080e7c0b35118152bab7e9c724c7996cb9cb9c463549676c5993e96d2c11a40->enter($__internal_d080e7c0b35118152bab7e9c724c7996cb9cb9c463549676c5993e96d2c11a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fb77aeb412b931ddcc68aed168eca87ff9ac101120b3691f08655c74dc744f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb77aeb412b931ddcc68aed168eca87ff9ac101120b3691f08655c74dc744f6->enter($__internal_4fb77aeb412b931ddcc68aed168eca87ff9ac101120b3691f08655c74dc744f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4fb77aeb412b931ddcc68aed168eca87ff9ac101120b3691f08655c74dc744f6->leave($__internal_4fb77aeb412b931ddcc68aed168eca87ff9ac101120b3691f08655c74dc744f6_prof);

        
        $__internal_d080e7c0b35118152bab7e9c724c7996cb9cb9c463549676c5993e96d2c11a40->leave($__internal_d080e7c0b35118152bab7e9c724c7996cb9cb9c463549676c5993e96d2c11a40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ab47a1603648835e8295bd932e220c51514502dadbe41423e9794c01ed577ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab47a1603648835e8295bd932e220c51514502dadbe41423e9794c01ed577ea->enter($__internal_9ab47a1603648835e8295bd932e220c51514502dadbe41423e9794c01ed577ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d55dc8867b594e40cdb73719408bc4318d81134338982bc30bb26bffddd2fdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55dc8867b594e40cdb73719408bc4318d81134338982bc30bb26bffddd2fdfa->enter($__internal_d55dc8867b594e40cdb73719408bc4318d81134338982bc30bb26bffddd2fdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d55dc8867b594e40cdb73719408bc4318d81134338982bc30bb26bffddd2fdfa->leave($__internal_d55dc8867b594e40cdb73719408bc4318d81134338982bc30bb26bffddd2fdfa_prof);

        
        $__internal_9ab47a1603648835e8295bd932e220c51514502dadbe41423e9794c01ed577ea->leave($__internal_9ab47a1603648835e8295bd932e220c51514502dadbe41423e9794c01ed577ea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/base.html.twig");
    }
}
