<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fac4bda99c1c84e70b593071f7541a85fec033aa67a013a5231a0f75ae7c3c4d extends Twig_Template
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
        $__internal_342f5fb2251fe7fea80b10288e65f245f25f68622c526bb20b2134b19a053576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342f5fb2251fe7fea80b10288e65f245f25f68622c526bb20b2134b19a053576->enter($__internal_342f5fb2251fe7fea80b10288e65f245f25f68622c526bb20b2134b19a053576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c7f4792c330d97809f0c0fbdb06b755211697cacc79038e2a9d364c30337278d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f4792c330d97809f0c0fbdb06b755211697cacc79038e2a9d364c30337278d->enter($__internal_c7f4792c330d97809f0c0fbdb06b755211697cacc79038e2a9d364c30337278d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_342f5fb2251fe7fea80b10288e65f245f25f68622c526bb20b2134b19a053576->leave($__internal_342f5fb2251fe7fea80b10288e65f245f25f68622c526bb20b2134b19a053576_prof);

        
        $__internal_c7f4792c330d97809f0c0fbdb06b755211697cacc79038e2a9d364c30337278d->leave($__internal_c7f4792c330d97809f0c0fbdb06b755211697cacc79038e2a9d364c30337278d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
