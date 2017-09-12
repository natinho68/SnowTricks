<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3bd2baf983c05530b574c7cf4b4c681beca9466b9fec6136cb2e4e8b1525fdd3 extends Twig_Template
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
        $__internal_153fe1df11356bbcad78be7858e6bb169869698a123391ba7f144ee1b6086736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153fe1df11356bbcad78be7858e6bb169869698a123391ba7f144ee1b6086736->enter($__internal_153fe1df11356bbcad78be7858e6bb169869698a123391ba7f144ee1b6086736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1478ef1262ab53d95f839c0f057168583931a000faa57cfce418472f51e4d619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1478ef1262ab53d95f839c0f057168583931a000faa57cfce418472f51e4d619->enter($__internal_1478ef1262ab53d95f839c0f057168583931a000faa57cfce418472f51e4d619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_153fe1df11356bbcad78be7858e6bb169869698a123391ba7f144ee1b6086736->leave($__internal_153fe1df11356bbcad78be7858e6bb169869698a123391ba7f144ee1b6086736_prof);

        
        $__internal_1478ef1262ab53d95f839c0f057168583931a000faa57cfce418472f51e4d619->leave($__internal_1478ef1262ab53d95f839c0f057168583931a000faa57cfce418472f51e4d619_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
