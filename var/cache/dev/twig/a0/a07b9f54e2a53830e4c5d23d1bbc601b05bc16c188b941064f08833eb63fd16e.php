<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_530200b443199baf08c5448d10aa713924815ab41c12095a45db150991b9f05d extends Twig_Template
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
        $__internal_f3a296f5920c9a35cf566dcc3ffa1c8897cff1c282ef347d8af4b2cc29fc6ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a296f5920c9a35cf566dcc3ffa1c8897cff1c282ef347d8af4b2cc29fc6ae9->enter($__internal_f3a296f5920c9a35cf566dcc3ffa1c8897cff1c282ef347d8af4b2cc29fc6ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f715dea480a4785c0be0bd298b4ec93a56f16a84e8839c13f078ffcd865686da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f715dea480a4785c0be0bd298b4ec93a56f16a84e8839c13f078ffcd865686da->enter($__internal_f715dea480a4785c0be0bd298b4ec93a56f16a84e8839c13f078ffcd865686da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f3a296f5920c9a35cf566dcc3ffa1c8897cff1c282ef347d8af4b2cc29fc6ae9->leave($__internal_f3a296f5920c9a35cf566dcc3ffa1c8897cff1c282ef347d8af4b2cc29fc6ae9_prof);

        
        $__internal_f715dea480a4785c0be0bd298b4ec93a56f16a84e8839c13f078ffcd865686da->leave($__internal_f715dea480a4785c0be0bd298b4ec93a56f16a84e8839c13f078ffcd865686da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
