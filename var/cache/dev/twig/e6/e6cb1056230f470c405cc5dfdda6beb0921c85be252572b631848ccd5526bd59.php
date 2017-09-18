<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_345d65689d7f502da017a8b3425928a781c04b77afc24057d77620c844211736 extends Twig_Template
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
        $__internal_70f0a07fd33cf05058b100edd01d6992e013bf91e86191d98e85093bdbf523db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f0a07fd33cf05058b100edd01d6992e013bf91e86191d98e85093bdbf523db->enter($__internal_70f0a07fd33cf05058b100edd01d6992e013bf91e86191d98e85093bdbf523db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:table.html.twig"));

        $__internal_366ea118bb7825bcabf5ffa1bbab7d4d49c0188f46fd0ca26547e56d98b717a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366ea118bb7825bcabf5ffa1bbab7d4d49c0188f46fd0ca26547e56d98b717a1->enter($__internal_366ea118bb7825bcabf5ffa1bbab7d4d49c0188f46fd0ca26547e56d98b717a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:table.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th scope=\"row\">";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_70f0a07fd33cf05058b100edd01d6992e013bf91e86191d98e85093bdbf523db->leave($__internal_70f0a07fd33cf05058b100edd01d6992e013bf91e86191d98e85093bdbf523db_prof);

        
        $__internal_366ea118bb7825bcabf5ffa1bbab7d4d49c0188f46fd0ca26547e56d98b717a1->leave($__internal_366ea118bb7825bcabf5ffa1bbab7d4d49c0188f46fd0ca26547e56d98b717a1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in data|keys|sort %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ profiler_dump(data[key]) }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "WebProfilerBundle:Profiler:table.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/table.html.twig");
    }
}
