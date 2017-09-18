<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9ea9014fa5c362fa1e72c4ddc70ca824387834cc5adbe2b7eb539b126f4eb679 extends Twig_Template
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
        $__internal_634f75e8bfab85308fd10dd9fc3e2be0fb9e64ad1d6534cbfedcb7ec10c687af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634f75e8bfab85308fd10dd9fc3e2be0fb9e64ad1d6534cbfedcb7ec10c687af->enter($__internal_634f75e8bfab85308fd10dd9fc3e2be0fb9e64ad1d6534cbfedcb7ec10c687af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_40fb1bd4f039fd98cbfe1c25076549e1873c6129d34034011becc2a8f8cc21a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fb1bd4f039fd98cbfe1c25076549e1873c6129d34034011becc2a8f8cc21a0->enter($__internal_40fb1bd4f039fd98cbfe1c25076549e1873c6129d34034011becc2a8f8cc21a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_634f75e8bfab85308fd10dd9fc3e2be0fb9e64ad1d6534cbfedcb7ec10c687af->leave($__internal_634f75e8bfab85308fd10dd9fc3e2be0fb9e64ad1d6534cbfedcb7ec10c687af_prof);

        
        $__internal_40fb1bd4f039fd98cbfe1c25076549e1873c6129d34034011becc2a8f8cc21a0->leave($__internal_40fb1bd4f039fd98cbfe1c25076549e1873c6129d34034011becc2a8f8cc21a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
