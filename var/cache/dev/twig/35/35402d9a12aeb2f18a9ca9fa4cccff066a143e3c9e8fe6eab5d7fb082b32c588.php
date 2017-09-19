<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_21ae4b8c211583f864b4b5cd189c164b582fb5b106fc09723fa8f4dcaa1291b5 extends Twig_Template
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
        $__internal_2c1a802cee2d5c94240fd4bc839b9859facc2772b2713f99de158bbb700e11a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1a802cee2d5c94240fd4bc839b9859facc2772b2713f99de158bbb700e11a5->enter($__internal_2c1a802cee2d5c94240fd4bc839b9859facc2772b2713f99de158bbb700e11a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3706ea863d054c2eeb5df1d3bf90df365f560e1f6c8a16ffa40f999448184260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3706ea863d054c2eeb5df1d3bf90df365f560e1f6c8a16ffa40f999448184260->enter($__internal_3706ea863d054c2eeb5df1d3bf90df365f560e1f6c8a16ffa40f999448184260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2c1a802cee2d5c94240fd4bc839b9859facc2772b2713f99de158bbb700e11a5->leave($__internal_2c1a802cee2d5c94240fd4bc839b9859facc2772b2713f99de158bbb700e11a5_prof);

        
        $__internal_3706ea863d054c2eeb5df1d3bf90df365f560e1f6c8a16ffa40f999448184260->leave($__internal_3706ea863d054c2eeb5df1d3bf90df365f560e1f6c8a16ffa40f999448184260_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
