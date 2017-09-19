<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_299b6b4f8209a55e5aae4eadcbf4d5d36332c020dcb836a3a244861c1ba5eac5 extends Twig_Template
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
        $__internal_efbc2ee1e6e9081f89731dcae32488b916f87a16ae9a230ed8a4b24a6cfcfec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbc2ee1e6e9081f89731dcae32488b916f87a16ae9a230ed8a4b24a6cfcfec4->enter($__internal_efbc2ee1e6e9081f89731dcae32488b916f87a16ae9a230ed8a4b24a6cfcfec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_08721f49073a0229698d1e1dec8b924d9c313c50a5c2981ce3a79779f81dc160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08721f49073a0229698d1e1dec8b924d9c313c50a5c2981ce3a79779f81dc160->enter($__internal_08721f49073a0229698d1e1dec8b924d9c313c50a5c2981ce3a79779f81dc160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_efbc2ee1e6e9081f89731dcae32488b916f87a16ae9a230ed8a4b24a6cfcfec4->leave($__internal_efbc2ee1e6e9081f89731dcae32488b916f87a16ae9a230ed8a4b24a6cfcfec4_prof);

        
        $__internal_08721f49073a0229698d1e1dec8b924d9c313c50a5c2981ce3a79779f81dc160->leave($__internal_08721f49073a0229698d1e1dec8b924d9c313c50a5c2981ce3a79779f81dc160_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
