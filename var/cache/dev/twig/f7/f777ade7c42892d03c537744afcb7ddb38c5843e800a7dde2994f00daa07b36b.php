<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b7fb912a3210372fa146cb1091a9afc7276463a833acc3ceff09a8f31da91ef5 extends Twig_Template
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
        $__internal_e0d17dd720901d86e29069c6f3d0c0c04ef4291e1ebdf479976e8ceb3455d314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d17dd720901d86e29069c6f3d0c0c04ef4291e1ebdf479976e8ceb3455d314->enter($__internal_e0d17dd720901d86e29069c6f3d0c0c04ef4291e1ebdf479976e8ceb3455d314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_38fc8e1db363d2488a66705228514cf6cdc229d7a4602433babaf0429944bbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fc8e1db363d2488a66705228514cf6cdc229d7a4602433babaf0429944bbcf->enter($__internal_38fc8e1db363d2488a66705228514cf6cdc229d7a4602433babaf0429944bbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e0d17dd720901d86e29069c6f3d0c0c04ef4291e1ebdf479976e8ceb3455d314->leave($__internal_e0d17dd720901d86e29069c6f3d0c0c04ef4291e1ebdf479976e8ceb3455d314_prof);

        
        $__internal_38fc8e1db363d2488a66705228514cf6cdc229d7a4602433babaf0429944bbcf->leave($__internal_38fc8e1db363d2488a66705228514cf6cdc229d7a4602433babaf0429944bbcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
