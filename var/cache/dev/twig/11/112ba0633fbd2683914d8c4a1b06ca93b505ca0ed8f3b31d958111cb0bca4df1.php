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
        $__internal_f3295b54309bbc9b000cae41c4372d28eca37dafe35430df782f3ab654dc5298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3295b54309bbc9b000cae41c4372d28eca37dafe35430df782f3ab654dc5298->enter($__internal_f3295b54309bbc9b000cae41c4372d28eca37dafe35430df782f3ab654dc5298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6e2cfd7d3ff9f1cbf94cf01d596c40b575e25b8b2b18e2974d366c0c6bdd8685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2cfd7d3ff9f1cbf94cf01d596c40b575e25b8b2b18e2974d366c0c6bdd8685->enter($__internal_6e2cfd7d3ff9f1cbf94cf01d596c40b575e25b8b2b18e2974d366c0c6bdd8685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f3295b54309bbc9b000cae41c4372d28eca37dafe35430df782f3ab654dc5298->leave($__internal_f3295b54309bbc9b000cae41c4372d28eca37dafe35430df782f3ab654dc5298_prof);

        
        $__internal_6e2cfd7d3ff9f1cbf94cf01d596c40b575e25b8b2b18e2974d366c0c6bdd8685->leave($__internal_6e2cfd7d3ff9f1cbf94cf01d596c40b575e25b8b2b18e2974d366c0c6bdd8685_prof);

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
