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
        $__internal_3e65f3f77fead3a202196ab272acfc53ea894f15b462a8a713ab5bebbac52c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e65f3f77fead3a202196ab272acfc53ea894f15b462a8a713ab5bebbac52c0f->enter($__internal_3e65f3f77fead3a202196ab272acfc53ea894f15b462a8a713ab5bebbac52c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ffa8298b4888404dc0e343493ecb60035732b49cdea019ddc57f7f1c94e8d1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa8298b4888404dc0e343493ecb60035732b49cdea019ddc57f7f1c94e8d1c8->enter($__internal_ffa8298b4888404dc0e343493ecb60035732b49cdea019ddc57f7f1c94e8d1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3e65f3f77fead3a202196ab272acfc53ea894f15b462a8a713ab5bebbac52c0f->leave($__internal_3e65f3f77fead3a202196ab272acfc53ea894f15b462a8a713ab5bebbac52c0f_prof);

        
        $__internal_ffa8298b4888404dc0e343493ecb60035732b49cdea019ddc57f7f1c94e8d1c8->leave($__internal_ffa8298b4888404dc0e343493ecb60035732b49cdea019ddc57f7f1c94e8d1c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ec9fd84e8ccae0f335c090a3db222bd60994dce4ff3bc48fec7af7fc3e0ceaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec9fd84e8ccae0f335c090a3db222bd60994dce4ff3bc48fec7af7fc3e0ceaf->enter($__internal_2ec9fd84e8ccae0f335c090a3db222bd60994dce4ff3bc48fec7af7fc3e0ceaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f266e69152b8d27909619ee9ced680ef5033f364f91b36f6f0225c611c48355e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f266e69152b8d27909619ee9ced680ef5033f364f91b36f6f0225c611c48355e->enter($__internal_f266e69152b8d27909619ee9ced680ef5033f364f91b36f6f0225c611c48355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f266e69152b8d27909619ee9ced680ef5033f364f91b36f6f0225c611c48355e->leave($__internal_f266e69152b8d27909619ee9ced680ef5033f364f91b36f6f0225c611c48355e_prof);

        
        $__internal_2ec9fd84e8ccae0f335c090a3db222bd60994dce4ff3bc48fec7af7fc3e0ceaf->leave($__internal_2ec9fd84e8ccae0f335c090a3db222bd60994dce4ff3bc48fec7af7fc3e0ceaf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6905c162b03c664db7d54de2aa382da9788716146b09fa7d34fe7c11744fbcbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6905c162b03c664db7d54de2aa382da9788716146b09fa7d34fe7c11744fbcbd->enter($__internal_6905c162b03c664db7d54de2aa382da9788716146b09fa7d34fe7c11744fbcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1a3d3bc7fe7d3f1e755ede745e2f5a12b4ae2477a00338dde4bc0161342bacdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3d3bc7fe7d3f1e755ede745e2f5a12b4ae2477a00338dde4bc0161342bacdb->enter($__internal_1a3d3bc7fe7d3f1e755ede745e2f5a12b4ae2477a00338dde4bc0161342bacdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a3d3bc7fe7d3f1e755ede745e2f5a12b4ae2477a00338dde4bc0161342bacdb->leave($__internal_1a3d3bc7fe7d3f1e755ede745e2f5a12b4ae2477a00338dde4bc0161342bacdb_prof);

        
        $__internal_6905c162b03c664db7d54de2aa382da9788716146b09fa7d34fe7c11744fbcbd->leave($__internal_6905c162b03c664db7d54de2aa382da9788716146b09fa7d34fe7c11744fbcbd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_49b445a74fa0b96cf4191d71f762502c4e84f895d9d9ebaf113d6fe618631518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b445a74fa0b96cf4191d71f762502c4e84f895d9d9ebaf113d6fe618631518->enter($__internal_49b445a74fa0b96cf4191d71f762502c4e84f895d9d9ebaf113d6fe618631518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_005b037f289645cf029dee63603eb67be5f4f992837746871db78ee43ef014f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005b037f289645cf029dee63603eb67be5f4f992837746871db78ee43ef014f6->enter($__internal_005b037f289645cf029dee63603eb67be5f4f992837746871db78ee43ef014f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_005b037f289645cf029dee63603eb67be5f4f992837746871db78ee43ef014f6->leave($__internal_005b037f289645cf029dee63603eb67be5f4f992837746871db78ee43ef014f6_prof);

        
        $__internal_49b445a74fa0b96cf4191d71f762502c4e84f895d9d9ebaf113d6fe618631518->leave($__internal_49b445a74fa0b96cf4191d71f762502c4e84f895d9d9ebaf113d6fe618631518_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d33ad6cee56b438a7aea6aa98ff682094acd36e9ca1ec1bf5c841149d2912d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33ad6cee56b438a7aea6aa98ff682094acd36e9ca1ec1bf5c841149d2912d0e->enter($__internal_d33ad6cee56b438a7aea6aa98ff682094acd36e9ca1ec1bf5c841149d2912d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b4c243f3685bf7657c61631c7a899d4cffd4608af0f594250c54836d73ad248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4c243f3685bf7657c61631c7a899d4cffd4608af0f594250c54836d73ad248->enter($__internal_7b4c243f3685bf7657c61631c7a899d4cffd4608af0f594250c54836d73ad248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7b4c243f3685bf7657c61631c7a899d4cffd4608af0f594250c54836d73ad248->leave($__internal_7b4c243f3685bf7657c61631c7a899d4cffd4608af0f594250c54836d73ad248_prof);

        
        $__internal_d33ad6cee56b438a7aea6aa98ff682094acd36e9ca1ec1bf5c841149d2912d0e->leave($__internal_d33ad6cee56b438a7aea6aa98ff682094acd36e9ca1ec1bf5c841149d2912d0e_prof);

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
