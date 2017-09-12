<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4504efcb1ba9b56b01467a86a1f7890cca3c585a3f0f8b9d65df2e0ae06c1442 extends Twig_Template
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
        $__internal_2fc86cb89aab27012f37af1f2affb17c4929892aa337c8a49c7f9f6ee17ba104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc86cb89aab27012f37af1f2affb17c4929892aa337c8a49c7f9f6ee17ba104->enter($__internal_2fc86cb89aab27012f37af1f2affb17c4929892aa337c8a49c7f9f6ee17ba104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_70d81462e10e4874392e48ade8d3db52caf9bde9d4a8c91dc5746fb6309821aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d81462e10e4874392e48ade8d3db52caf9bde9d4a8c91dc5746fb6309821aa->enter($__internal_70d81462e10e4874392e48ade8d3db52caf9bde9d4a8c91dc5746fb6309821aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2fc86cb89aab27012f37af1f2affb17c4929892aa337c8a49c7f9f6ee17ba104->leave($__internal_2fc86cb89aab27012f37af1f2affb17c4929892aa337c8a49c7f9f6ee17ba104_prof);

        
        $__internal_70d81462e10e4874392e48ade8d3db52caf9bde9d4a8c91dc5746fb6309821aa->leave($__internal_70d81462e10e4874392e48ade8d3db52caf9bde9d4a8c91dc5746fb6309821aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
