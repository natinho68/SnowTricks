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
        $__internal_3da3af22ac1b6aeee022519aaa343c28fe54ae4beb7226c3201f06da2f35fbde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da3af22ac1b6aeee022519aaa343c28fe54ae4beb7226c3201f06da2f35fbde->enter($__internal_3da3af22ac1b6aeee022519aaa343c28fe54ae4beb7226c3201f06da2f35fbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b03810b15ea0433100e53cb9267048e907afb83a58cd14b3520d9f8079fe0e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03810b15ea0433100e53cb9267048e907afb83a58cd14b3520d9f8079fe0e60->enter($__internal_b03810b15ea0433100e53cb9267048e907afb83a58cd14b3520d9f8079fe0e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3da3af22ac1b6aeee022519aaa343c28fe54ae4beb7226c3201f06da2f35fbde->leave($__internal_3da3af22ac1b6aeee022519aaa343c28fe54ae4beb7226c3201f06da2f35fbde_prof);

        
        $__internal_b03810b15ea0433100e53cb9267048e907afb83a58cd14b3520d9f8079fe0e60->leave($__internal_b03810b15ea0433100e53cb9267048e907afb83a58cd14b3520d9f8079fe0e60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55fd36a8c88076753228e1e0b6d6ba5984d5615f0a6cbf27c8010b0b46aedd37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fd36a8c88076753228e1e0b6d6ba5984d5615f0a6cbf27c8010b0b46aedd37->enter($__internal_55fd36a8c88076753228e1e0b6d6ba5984d5615f0a6cbf27c8010b0b46aedd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_333a35132a820fc09a080c19d9146c3276b6556ba0e3339843ba4156f2d45d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333a35132a820fc09a080c19d9146c3276b6556ba0e3339843ba4156f2d45d7f->enter($__internal_333a35132a820fc09a080c19d9146c3276b6556ba0e3339843ba4156f2d45d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_333a35132a820fc09a080c19d9146c3276b6556ba0e3339843ba4156f2d45d7f->leave($__internal_333a35132a820fc09a080c19d9146c3276b6556ba0e3339843ba4156f2d45d7f_prof);

        
        $__internal_55fd36a8c88076753228e1e0b6d6ba5984d5615f0a6cbf27c8010b0b46aedd37->leave($__internal_55fd36a8c88076753228e1e0b6d6ba5984d5615f0a6cbf27c8010b0b46aedd37_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73cd10b9862fa9e8abc391cffdb3eab1998e0124698ae5b878930c519e7af487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73cd10b9862fa9e8abc391cffdb3eab1998e0124698ae5b878930c519e7af487->enter($__internal_73cd10b9862fa9e8abc391cffdb3eab1998e0124698ae5b878930c519e7af487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22e9c03f6739fd395adc8c86b141b53a07609393a143d9a3c152e2f62229bac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e9c03f6739fd395adc8c86b141b53a07609393a143d9a3c152e2f62229bac0->enter($__internal_22e9c03f6739fd395adc8c86b141b53a07609393a143d9a3c152e2f62229bac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_22e9c03f6739fd395adc8c86b141b53a07609393a143d9a3c152e2f62229bac0->leave($__internal_22e9c03f6739fd395adc8c86b141b53a07609393a143d9a3c152e2f62229bac0_prof);

        
        $__internal_73cd10b9862fa9e8abc391cffdb3eab1998e0124698ae5b878930c519e7af487->leave($__internal_73cd10b9862fa9e8abc391cffdb3eab1998e0124698ae5b878930c519e7af487_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_93cdcbcf9a608e5119a046e390a862db085b30645003a51a6f7dd99ecfc350b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93cdcbcf9a608e5119a046e390a862db085b30645003a51a6f7dd99ecfc350b4->enter($__internal_93cdcbcf9a608e5119a046e390a862db085b30645003a51a6f7dd99ecfc350b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_634be02028e139e0fe9b4bb90f6a4f1b42c1549f318696190f10600aa3ada3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634be02028e139e0fe9b4bb90f6a4f1b42c1549f318696190f10600aa3ada3ef->enter($__internal_634be02028e139e0fe9b4bb90f6a4f1b42c1549f318696190f10600aa3ada3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_634be02028e139e0fe9b4bb90f6a4f1b42c1549f318696190f10600aa3ada3ef->leave($__internal_634be02028e139e0fe9b4bb90f6a4f1b42c1549f318696190f10600aa3ada3ef_prof);

        
        $__internal_93cdcbcf9a608e5119a046e390a862db085b30645003a51a6f7dd99ecfc350b4->leave($__internal_93cdcbcf9a608e5119a046e390a862db085b30645003a51a6f7dd99ecfc350b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_657d3b9b56aab9d9ae521084c63fc11dc4a44d89bd16d20a354b0dbdf61a266b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657d3b9b56aab9d9ae521084c63fc11dc4a44d89bd16d20a354b0dbdf61a266b->enter($__internal_657d3b9b56aab9d9ae521084c63fc11dc4a44d89bd16d20a354b0dbdf61a266b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16c5ed7f1aaecba3247588d74ee55fc25795c57b5b0102d171a67043152b16b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c5ed7f1aaecba3247588d74ee55fc25795c57b5b0102d171a67043152b16b2->enter($__internal_16c5ed7f1aaecba3247588d74ee55fc25795c57b5b0102d171a67043152b16b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_16c5ed7f1aaecba3247588d74ee55fc25795c57b5b0102d171a67043152b16b2->leave($__internal_16c5ed7f1aaecba3247588d74ee55fc25795c57b5b0102d171a67043152b16b2_prof);

        
        $__internal_657d3b9b56aab9d9ae521084c63fc11dc4a44d89bd16d20a354b0dbdf61a266b->leave($__internal_657d3b9b56aab9d9ae521084c63fc11dc4a44d89bd16d20a354b0dbdf61a266b_prof);

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
