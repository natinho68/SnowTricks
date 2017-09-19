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
        $__internal_acf151a0ddffb61b01b85d0e2313a5a340008989a014d417f2927a8b34612ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf151a0ddffb61b01b85d0e2313a5a340008989a014d417f2927a8b34612ce3->enter($__internal_acf151a0ddffb61b01b85d0e2313a5a340008989a014d417f2927a8b34612ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a13d97105d9feb76ae110990b3e17d7cb1b576acd04dc89b167730599caabbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13d97105d9feb76ae110990b3e17d7cb1b576acd04dc89b167730599caabbe4->enter($__internal_a13d97105d9feb76ae110990b3e17d7cb1b576acd04dc89b167730599caabbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_acf151a0ddffb61b01b85d0e2313a5a340008989a014d417f2927a8b34612ce3->leave($__internal_acf151a0ddffb61b01b85d0e2313a5a340008989a014d417f2927a8b34612ce3_prof);

        
        $__internal_a13d97105d9feb76ae110990b3e17d7cb1b576acd04dc89b167730599caabbe4->leave($__internal_a13d97105d9feb76ae110990b3e17d7cb1b576acd04dc89b167730599caabbe4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40b37e7ea1b19d2d4c5e677b5447b2c5d8596866252685df6cb37901351cc6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b37e7ea1b19d2d4c5e677b5447b2c5d8596866252685df6cb37901351cc6c4->enter($__internal_40b37e7ea1b19d2d4c5e677b5447b2c5d8596866252685df6cb37901351cc6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5df282e17215b79812f2ef72516c054fdc09b09fdcf52998bda3c96fcec1370d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df282e17215b79812f2ef72516c054fdc09b09fdcf52998bda3c96fcec1370d->enter($__internal_5df282e17215b79812f2ef72516c054fdc09b09fdcf52998bda3c96fcec1370d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5df282e17215b79812f2ef72516c054fdc09b09fdcf52998bda3c96fcec1370d->leave($__internal_5df282e17215b79812f2ef72516c054fdc09b09fdcf52998bda3c96fcec1370d_prof);

        
        $__internal_40b37e7ea1b19d2d4c5e677b5447b2c5d8596866252685df6cb37901351cc6c4->leave($__internal_40b37e7ea1b19d2d4c5e677b5447b2c5d8596866252685df6cb37901351cc6c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53a973c4e6769adf085ce8d975aa4a280aa9d8d61840add5f132cc80fbf55efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a973c4e6769adf085ce8d975aa4a280aa9d8d61840add5f132cc80fbf55efa->enter($__internal_53a973c4e6769adf085ce8d975aa4a280aa9d8d61840add5f132cc80fbf55efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b0779af91ed6d2606cc0fc19531b0552932e1cca4c961089c4111b3b8bc5568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0779af91ed6d2606cc0fc19531b0552932e1cca4c961089c4111b3b8bc5568->enter($__internal_5b0779af91ed6d2606cc0fc19531b0552932e1cca4c961089c4111b3b8bc5568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b0779af91ed6d2606cc0fc19531b0552932e1cca4c961089c4111b3b8bc5568->leave($__internal_5b0779af91ed6d2606cc0fc19531b0552932e1cca4c961089c4111b3b8bc5568_prof);

        
        $__internal_53a973c4e6769adf085ce8d975aa4a280aa9d8d61840add5f132cc80fbf55efa->leave($__internal_53a973c4e6769adf085ce8d975aa4a280aa9d8d61840add5f132cc80fbf55efa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_316f7f42b499a4a4d57db89a5c9bae92a72fdba36ac5cf8bd2d68e36715966b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316f7f42b499a4a4d57db89a5c9bae92a72fdba36ac5cf8bd2d68e36715966b3->enter($__internal_316f7f42b499a4a4d57db89a5c9bae92a72fdba36ac5cf8bd2d68e36715966b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5615b639065cbc1093424db0f8b09ce6e24cf9c3504c7d244a0d8d46ac518b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5615b639065cbc1093424db0f8b09ce6e24cf9c3504c7d244a0d8d46ac518b8d->enter($__internal_5615b639065cbc1093424db0f8b09ce6e24cf9c3504c7d244a0d8d46ac518b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5615b639065cbc1093424db0f8b09ce6e24cf9c3504c7d244a0d8d46ac518b8d->leave($__internal_5615b639065cbc1093424db0f8b09ce6e24cf9c3504c7d244a0d8d46ac518b8d_prof);

        
        $__internal_316f7f42b499a4a4d57db89a5c9bae92a72fdba36ac5cf8bd2d68e36715966b3->leave($__internal_316f7f42b499a4a4d57db89a5c9bae92a72fdba36ac5cf8bd2d68e36715966b3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5674fe36ea6cae0336e7149520431d3290715dd226b9927d53d324322cf8348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5674fe36ea6cae0336e7149520431d3290715dd226b9927d53d324322cf8348->enter($__internal_a5674fe36ea6cae0336e7149520431d3290715dd226b9927d53d324322cf8348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f6b810282fd02357df0f947acc4d96b47955a6559269cbab6f7e9d6ef77689dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b810282fd02357df0f947acc4d96b47955a6559269cbab6f7e9d6ef77689dc->enter($__internal_f6b810282fd02357df0f947acc4d96b47955a6559269cbab6f7e9d6ef77689dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6b810282fd02357df0f947acc4d96b47955a6559269cbab6f7e9d6ef77689dc->leave($__internal_f6b810282fd02357df0f947acc4d96b47955a6559269cbab6f7e9d6ef77689dc_prof);

        
        $__internal_a5674fe36ea6cae0336e7149520431d3290715dd226b9927d53d324322cf8348->leave($__internal_a5674fe36ea6cae0336e7149520431d3290715dd226b9927d53d324322cf8348_prof);

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
