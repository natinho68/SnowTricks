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
        $__internal_5daa45a68e3da58bfd508bf8d1ee2df16c17880e3dc1a76c54ae4ad9bd2be7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5daa45a68e3da58bfd508bf8d1ee2df16c17880e3dc1a76c54ae4ad9bd2be7a1->enter($__internal_5daa45a68e3da58bfd508bf8d1ee2df16c17880e3dc1a76c54ae4ad9bd2be7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_33f3ea3f5dabd9dc98d796c93020857269e43c022847de986a7de5ce73011063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f3ea3f5dabd9dc98d796c93020857269e43c022847de986a7de5ce73011063->enter($__internal_33f3ea3f5dabd9dc98d796c93020857269e43c022847de986a7de5ce73011063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5daa45a68e3da58bfd508bf8d1ee2df16c17880e3dc1a76c54ae4ad9bd2be7a1->leave($__internal_5daa45a68e3da58bfd508bf8d1ee2df16c17880e3dc1a76c54ae4ad9bd2be7a1_prof);

        
        $__internal_33f3ea3f5dabd9dc98d796c93020857269e43c022847de986a7de5ce73011063->leave($__internal_33f3ea3f5dabd9dc98d796c93020857269e43c022847de986a7de5ce73011063_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc660674e181dde86c194ec821181f617e19c50aa577540d5ec2a7421208fc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc660674e181dde86c194ec821181f617e19c50aa577540d5ec2a7421208fc04->enter($__internal_dc660674e181dde86c194ec821181f617e19c50aa577540d5ec2a7421208fc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a87b9289d6a2bc6216bf43c255aebd98123eaa0d85dd33f744a623376c904b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87b9289d6a2bc6216bf43c255aebd98123eaa0d85dd33f744a623376c904b3a->enter($__internal_a87b9289d6a2bc6216bf43c255aebd98123eaa0d85dd33f744a623376c904b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a87b9289d6a2bc6216bf43c255aebd98123eaa0d85dd33f744a623376c904b3a->leave($__internal_a87b9289d6a2bc6216bf43c255aebd98123eaa0d85dd33f744a623376c904b3a_prof);

        
        $__internal_dc660674e181dde86c194ec821181f617e19c50aa577540d5ec2a7421208fc04->leave($__internal_dc660674e181dde86c194ec821181f617e19c50aa577540d5ec2a7421208fc04_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fa7c0a80cded039df4d515b6f21ff9890cb8879f7914121212f88fe2fa4ea9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa7c0a80cded039df4d515b6f21ff9890cb8879f7914121212f88fe2fa4ea9d->enter($__internal_8fa7c0a80cded039df4d515b6f21ff9890cb8879f7914121212f88fe2fa4ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_237adf2ac8a0b9d214047014d363c5eca20df6de5f8720745eb344096b9f378d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237adf2ac8a0b9d214047014d363c5eca20df6de5f8720745eb344096b9f378d->enter($__internal_237adf2ac8a0b9d214047014d363c5eca20df6de5f8720745eb344096b9f378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_237adf2ac8a0b9d214047014d363c5eca20df6de5f8720745eb344096b9f378d->leave($__internal_237adf2ac8a0b9d214047014d363c5eca20df6de5f8720745eb344096b9f378d_prof);

        
        $__internal_8fa7c0a80cded039df4d515b6f21ff9890cb8879f7914121212f88fe2fa4ea9d->leave($__internal_8fa7c0a80cded039df4d515b6f21ff9890cb8879f7914121212f88fe2fa4ea9d_prof);

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
