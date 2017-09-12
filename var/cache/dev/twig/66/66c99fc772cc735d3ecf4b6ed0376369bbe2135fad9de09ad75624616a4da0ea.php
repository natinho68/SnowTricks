<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_805e1563398889dbe24b0fdef5e28f1db8bd879cd5e95df9476c2639a6204dfc extends Twig_Template
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
        $__internal_54c4e916b3b04f5d8d26c9d9aea71833397a1afbe2240807626492c63377d062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c4e916b3b04f5d8d26c9d9aea71833397a1afbe2240807626492c63377d062->enter($__internal_54c4e916b3b04f5d8d26c9d9aea71833397a1afbe2240807626492c63377d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_938d0ac373b2d7209b0146b7816957eeffb7d22c617a684e9f94bd2ee7b4af3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938d0ac373b2d7209b0146b7816957eeffb7d22c617a684e9f94bd2ee7b4af3d->enter($__internal_938d0ac373b2d7209b0146b7816957eeffb7d22c617a684e9f94bd2ee7b4af3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_54c4e916b3b04f5d8d26c9d9aea71833397a1afbe2240807626492c63377d062->leave($__internal_54c4e916b3b04f5d8d26c9d9aea71833397a1afbe2240807626492c63377d062_prof);

        
        $__internal_938d0ac373b2d7209b0146b7816957eeffb7d22c617a684e9f94bd2ee7b4af3d->leave($__internal_938d0ac373b2d7209b0146b7816957eeffb7d22c617a684e9f94bd2ee7b4af3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
