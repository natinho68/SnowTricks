<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_a6a48fa54d2a4c202f23a67bc5bb2f3293742d43aeefb5f2c0774c7ff2a12a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_260e4cad874af5d5d2db05181b8a01743926467eb764809f7862a88cce9e6f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260e4cad874af5d5d2db05181b8a01743926467eb764809f7862a88cce9e6f25->enter($__internal_260e4cad874af5d5d2db05181b8a01743926467eb764809f7862a88cce9e6f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_79e8dd90cf76377156c4b0ab6b21b454cc6fa885d1958029fdb153e6df5788b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e8dd90cf76377156c4b0ab6b21b454cc6fa885d1958029fdb153e6df5788b0->enter($__internal_79e8dd90cf76377156c4b0ab6b21b454cc6fa885d1958029fdb153e6df5788b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260e4cad874af5d5d2db05181b8a01743926467eb764809f7862a88cce9e6f25->leave($__internal_260e4cad874af5d5d2db05181b8a01743926467eb764809f7862a88cce9e6f25_prof);

        
        $__internal_79e8dd90cf76377156c4b0ab6b21b454cc6fa885d1958029fdb153e6df5788b0->leave($__internal_79e8dd90cf76377156c4b0ab6b21b454cc6fa885d1958029fdb153e6df5788b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18fd2e83f6ff762903274ecb3677d30b37a7cb2656ac261ee3c8594cec0b208b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fd2e83f6ff762903274ecb3677d30b37a7cb2656ac261ee3c8594cec0b208b->enter($__internal_18fd2e83f6ff762903274ecb3677d30b37a7cb2656ac261ee3c8594cec0b208b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0aa57cb958112739ee409696098afeb6a0a688b1e07ed89deea735bef1902ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa57cb958112739ee409696098afeb6a0a688b1e07ed89deea735bef1902ecc->enter($__internal_0aa57cb958112739ee409696098afeb6a0a688b1e07ed89deea735bef1902ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"row\" style=\"padding-top:15px;\">
                <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                    <div class=\"chip black alert\">
                        <i class=\" close material-icons right white-text\">close</i>
                        <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                        <h6 class=\"white-text\">";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "</h6>
                    </div>
                </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_0aa57cb958112739ee409696098afeb6a0a688b1e07ed89deea735bef1902ecc->leave($__internal_0aa57cb958112739ee409696098afeb6a0a688b1e07ed89deea735bef1902ecc_prof);

        
        $__internal_18fd2e83f6ff762903274ecb3677d30b37a7cb2656ac261ee3c8594cec0b208b->leave($__internal_18fd2e83f6ff762903274ecb3677d30b37a7cb2656ac261ee3c8594cec0b208b_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a50bd9f44dd6442605555274249ee93ef8bc7aca41335316fdd66e62f46b21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a50bd9f44dd6442605555274249ee93ef8bc7aca41335316fdd66e62f46b21e->enter($__internal_6a50bd9f44dd6442605555274249ee93ef8bc7aca41335316fdd66e62f46b21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3af0fedab15375ce020f1f8aca7e312e38086dcabe56da26cb3461945536977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3af0fedab15375ce020f1f8aca7e312e38086dcabe56da26cb3461945536977->enter($__internal_b3af0fedab15375ce020f1f8aca7e312e38086dcabe56da26cb3461945536977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_b3af0fedab15375ce020f1f8aca7e312e38086dcabe56da26cb3461945536977->leave($__internal_b3af0fedab15375ce020f1f8aca7e312e38086dcabe56da26cb3461945536977_prof);

        
        $__internal_6a50bd9f44dd6442605555274249ee93ef8bc7aca41335316fdd66e62f46b21e->leave($__internal_6a50bd9f44dd6442605555274249ee93ef8bc7aca41335316fdd66e62f46b21e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  106 => 24,  95 => 26,  92 => 24,  89 => 22,  83 => 21,  72 => 16,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On étend notre layout #}
{% extends \"AppBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

    {% for key, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"row\" style=\"padding-top:15px;\">
                <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                    <div class=\"chip black alert\">
                        <i class=\" close material-icons right white-text\">close</i>
                        <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                        <h6 class=\"white-text\">{{ message|trans({}, 'FOSUserBundle') }}</h6>
                    </div>
                </div>
        </div>
        {% endfor %}
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}
", "UserBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/layout.html.twig");
    }
}
