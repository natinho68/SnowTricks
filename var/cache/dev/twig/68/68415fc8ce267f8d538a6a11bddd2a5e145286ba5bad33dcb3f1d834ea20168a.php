<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_0927eeb168de635b9773f15725d3292875e52e7a078d9c4759d368319a9c62a9 extends Twig_Template
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
        $__internal_3a2917d5d71c2acaef2027e77a40d71aa67dfce7994ff0cb30a5644861b2cb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2917d5d71c2acaef2027e77a40d71aa67dfce7994ff0cb30a5644861b2cb4f->enter($__internal_3a2917d5d71c2acaef2027e77a40d71aa67dfce7994ff0cb30a5644861b2cb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_406a80fdb0306f4103ef0b5f3f7bea38b5ef745858f7aa6fa615b1bdad855b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406a80fdb0306f4103ef0b5f3f7bea38b5ef745858f7aa6fa615b1bdad855b70->enter($__internal_406a80fdb0306f4103ef0b5f3f7bea38b5ef745858f7aa6fa615b1bdad855b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3a2917d5d71c2acaef2027e77a40d71aa67dfce7994ff0cb30a5644861b2cb4f->leave($__internal_3a2917d5d71c2acaef2027e77a40d71aa67dfce7994ff0cb30a5644861b2cb4f_prof);

        
        $__internal_406a80fdb0306f4103ef0b5f3f7bea38b5ef745858f7aa6fa615b1bdad855b70->leave($__internal_406a80fdb0306f4103ef0b5f3f7bea38b5ef745858f7aa6fa615b1bdad855b70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
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
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
