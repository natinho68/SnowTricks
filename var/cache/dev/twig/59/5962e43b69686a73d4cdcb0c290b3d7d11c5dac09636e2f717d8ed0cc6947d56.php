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
        $__internal_cd160e7a1d5450743e74f600a7e451de6440e11f2177dc3db5a475aab4394054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd160e7a1d5450743e74f600a7e451de6440e11f2177dc3db5a475aab4394054->enter($__internal_cd160e7a1d5450743e74f600a7e451de6440e11f2177dc3db5a475aab4394054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c93ba8d4f936bcce9b027cc5bef41c7a9298be479c37cfa4a76a7133342bfe8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93ba8d4f936bcce9b027cc5bef41c7a9298be479c37cfa4a76a7133342bfe8e->enter($__internal_c93ba8d4f936bcce9b027cc5bef41c7a9298be479c37cfa4a76a7133342bfe8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cd160e7a1d5450743e74f600a7e451de6440e11f2177dc3db5a475aab4394054->leave($__internal_cd160e7a1d5450743e74f600a7e451de6440e11f2177dc3db5a475aab4394054_prof);

        
        $__internal_c93ba8d4f936bcce9b027cc5bef41c7a9298be479c37cfa4a76a7133342bfe8e->leave($__internal_c93ba8d4f936bcce9b027cc5bef41c7a9298be479c37cfa4a76a7133342bfe8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6d786bce22849e13af03a0095370cca613559f5d3306fb474a0d522939bdf9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d786bce22849e13af03a0095370cca613559f5d3306fb474a0d522939bdf9e->enter($__internal_b6d786bce22849e13af03a0095370cca613559f5d3306fb474a0d522939bdf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b17e3827af5d3956d2227d4d0793c7729b1e1b3d246b2f47b2212a3aa316f099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17e3827af5d3956d2227d4d0793c7729b1e1b3d246b2f47b2212a3aa316f099->enter($__internal_b17e3827af5d3956d2227d4d0793c7729b1e1b3d246b2f47b2212a3aa316f099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b17e3827af5d3956d2227d4d0793c7729b1e1b3d246b2f47b2212a3aa316f099->leave($__internal_b17e3827af5d3956d2227d4d0793c7729b1e1b3d246b2f47b2212a3aa316f099_prof);

        
        $__internal_b6d786bce22849e13af03a0095370cca613559f5d3306fb474a0d522939bdf9e->leave($__internal_b6d786bce22849e13af03a0095370cca613559f5d3306fb474a0d522939bdf9e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a3dedd02b5af43a0eca83a2c167b63794e98331821a96425e42690861ef58b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3dedd02b5af43a0eca83a2c167b63794e98331821a96425e42690861ef58b9->enter($__internal_0a3dedd02b5af43a0eca83a2c167b63794e98331821a96425e42690861ef58b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b200e5fd8520cd44a517d83cc143f2a2b004cc25cb46ca11115fccbdb57a7351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b200e5fd8520cd44a517d83cc143f2a2b004cc25cb46ca11115fccbdb57a7351->enter($__internal_b200e5fd8520cd44a517d83cc143f2a2b004cc25cb46ca11115fccbdb57a7351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b200e5fd8520cd44a517d83cc143f2a2b004cc25cb46ca11115fccbdb57a7351->leave($__internal_b200e5fd8520cd44a517d83cc143f2a2b004cc25cb46ca11115fccbdb57a7351_prof);

        
        $__internal_0a3dedd02b5af43a0eca83a2c167b63794e98331821a96425e42690861ef58b9->leave($__internal_0a3dedd02b5af43a0eca83a2c167b63794e98331821a96425e42690861ef58b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4108d66613c3f7e97fb9d44a24b0f634e98ec700b21f2195a2200719f2c20fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4108d66613c3f7e97fb9d44a24b0f634e98ec700b21f2195a2200719f2c20fcd->enter($__internal_4108d66613c3f7e97fb9d44a24b0f634e98ec700b21f2195a2200719f2c20fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_849b584e80911c224fa8064b32455e786d2b0e0e4ebebb135a1777543595facb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849b584e80911c224fa8064b32455e786d2b0e0e4ebebb135a1777543595facb->enter($__internal_849b584e80911c224fa8064b32455e786d2b0e0e4ebebb135a1777543595facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_849b584e80911c224fa8064b32455e786d2b0e0e4ebebb135a1777543595facb->leave($__internal_849b584e80911c224fa8064b32455e786d2b0e0e4ebebb135a1777543595facb_prof);

        
        $__internal_4108d66613c3f7e97fb9d44a24b0f634e98ec700b21f2195a2200719f2c20fcd->leave($__internal_4108d66613c3f7e97fb9d44a24b0f634e98ec700b21f2195a2200719f2c20fcd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7b07fe8d881ed10e9949fe072f63c0bea9ce9bccb9b78f56d653bbb390a7ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b07fe8d881ed10e9949fe072f63c0bea9ce9bccb9b78f56d653bbb390a7ad0->enter($__internal_d7b07fe8d881ed10e9949fe072f63c0bea9ce9bccb9b78f56d653bbb390a7ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f015e6408d66ddbccae062d128a0f27781ec36f73db0c539241dd7d86578275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f015e6408d66ddbccae062d128a0f27781ec36f73db0c539241dd7d86578275->enter($__internal_6f015e6408d66ddbccae062d128a0f27781ec36f73db0c539241dd7d86578275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f015e6408d66ddbccae062d128a0f27781ec36f73db0c539241dd7d86578275->leave($__internal_6f015e6408d66ddbccae062d128a0f27781ec36f73db0c539241dd7d86578275_prof);

        
        $__internal_d7b07fe8d881ed10e9949fe072f63c0bea9ce9bccb9b78f56d653bbb390a7ad0->leave($__internal_d7b07fe8d881ed10e9949fe072f63c0bea9ce9bccb9b78f56d653bbb390a7ad0_prof);

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
