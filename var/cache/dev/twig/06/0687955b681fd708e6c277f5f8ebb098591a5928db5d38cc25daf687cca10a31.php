<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_6de9a3df0d94b3282d19f5fde52e56e91ba730764a860dfc7a32da58cabf0e3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bf60802f313063b3523e8bf62c9d90553f33d8f1f85e2b253730f265eb3e1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf60802f313063b3523e8bf62c9d90553f33d8f1f85e2b253730f265eb3e1ee->enter($__internal_9bf60802f313063b3523e8bf62c9d90553f33d8f1f85e2b253730f265eb3e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        $__internal_69d697e93e0396daa5bf5ec11187a7c69c55109ded5b6af0ed39994350aa1f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d697e93e0396daa5bf5ec11187a7c69c55109ded5b6af0ed39994350aa1f60->enter($__internal_69d697e93e0396daa5bf5ec11187a7c69c55109ded5b6af0ed39994350aa1f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_9bf60802f313063b3523e8bf62c9d90553f33d8f1f85e2b253730f265eb3e1ee->leave($__internal_9bf60802f313063b3523e8bf62c9d90553f33d8f1f85e2b253730f265eb3e1ee_prof);

        
        $__internal_69d697e93e0396daa5bf5ec11187a7c69c55109ded5b6af0ed39994350aa1f60->leave($__internal_69d697e93e0396daa5bf5ec11187a7c69c55109ded5b6af0ed39994350aa1f60_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_82876c6c1283529cbb41f80ccfcd31d3c9da399ab235cb02e5a1d6000190074d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82876c6c1283529cbb41f80ccfcd31d3c9da399ab235cb02e5a1d6000190074d->enter($__internal_82876c6c1283529cbb41f80ccfcd31d3c9da399ab235cb02e5a1d6000190074d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df8438620da56283cfea31b0266d21d9a92596a7b3787c11d931448845032873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8438620da56283cfea31b0266d21d9a92596a7b3787c11d931448845032873->enter($__internal_df8438620da56283cfea31b0266d21d9a92596a7b3787c11d931448845032873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "            <style>
                ";
        // line 12
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        echo "
            </style>
        ";
        
        $__internal_df8438620da56283cfea31b0266d21d9a92596a7b3787c11d931448845032873->leave($__internal_df8438620da56283cfea31b0266d21d9a92596a7b3787c11d931448845032873_prof);

        
        $__internal_82876c6c1283529cbb41f80ccfcd31d3c9da399ab235cb02e5a1d6000190074d->leave($__internal_82876c6c1283529cbb41f80ccfcd31d3c9da399ab235cb02e5a1d6000190074d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_489dd2dac11372f0892ecb5c9d3605aaa6865cda10431cd3103caf1c803f5782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489dd2dac11372f0892ecb5c9d3605aaa6865cda10431cd3103caf1c803f5782->enter($__internal_489dd2dac11372f0892ecb5c9d3605aaa6865cda10431cd3103caf1c803f5782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f591bfd46f95cdd9afcf517693e717415a8b1f2b09cfc25ca9fa775bf8ef7257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f591bfd46f95cdd9afcf517693e717415a8b1f2b09cfc25ca9fa775bf8ef7257->enter($__internal_f591bfd46f95cdd9afcf517693e717415a8b1f2b09cfc25ca9fa775bf8ef7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_f591bfd46f95cdd9afcf517693e717415a8b1f2b09cfc25ca9fa775bf8ef7257->leave($__internal_f591bfd46f95cdd9afcf517693e717415a8b1f2b09cfc25ca9fa775bf8ef7257_prof);

        
        $__internal_489dd2dac11372f0892ecb5c9d3605aaa6865cda10431cd3103caf1c803f5782->leave($__internal_489dd2dac11372f0892ecb5c9d3605aaa6865cda10431cd3103caf1c803f5782_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  73 => 12,  70 => 11,  61 => 10,  49 => 18,  47 => 17,  43 => 15,  41 => 10,  32 => 4,  27 => 1,);
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
<html lang=\"en\">
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        {% block head %}
            <style>
                {{ include('@WebProfiler/Profiler/profiler.css.twig') }}
            </style>
        {% endblock %}
    </head>
    <body>
        {% block body '' %}
    </body>
</html>
", "@WebProfiler/Profiler/base.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/base.html.twig");
    }
}
