<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2e2f206689f67f94e2ff68d248dd7cee80b8b8159c28e990295ab8b15f9c8774 extends Twig_Template
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
        $__internal_c024b9a853b336961507c02ddc0ebc6f434aad28387b4091ce66242eb0bafb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c024b9a853b336961507c02ddc0ebc6f434aad28387b4091ce66242eb0bafb1d->enter($__internal_c024b9a853b336961507c02ddc0ebc6f434aad28387b4091ce66242eb0bafb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2ce53af0340cd781eb6c73ac41acd9749970d8d8ca8ac7a4d13e6d3e99935ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce53af0340cd781eb6c73ac41acd9749970d8d8ca8ac7a4d13e6d3e99935ec3->enter($__internal_2ce53af0340cd781eb6c73ac41acd9749970d8d8ca8ac7a4d13e6d3e99935ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c024b9a853b336961507c02ddc0ebc6f434aad28387b4091ce66242eb0bafb1d->leave($__internal_c024b9a853b336961507c02ddc0ebc6f434aad28387b4091ce66242eb0bafb1d_prof);

        
        $__internal_2ce53af0340cd781eb6c73ac41acd9749970d8d8ca8ac7a4d13e6d3e99935ec3->leave($__internal_2ce53af0340cd781eb6c73ac41acd9749970d8d8ca8ac7a4d13e6d3e99935ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
