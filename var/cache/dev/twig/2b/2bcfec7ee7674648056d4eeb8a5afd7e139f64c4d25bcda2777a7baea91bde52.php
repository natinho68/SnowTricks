<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7f545f45d40b090af3f7723592b96f041df094c47e0e7faa3dfd0caedc111fcf extends Twig_Template
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
        $__internal_97d873a225daada18af65eec084020a913d8297549ad57e5be34a1aea499340f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d873a225daada18af65eec084020a913d8297549ad57e5be34a1aea499340f->enter($__internal_97d873a225daada18af65eec084020a913d8297549ad57e5be34a1aea499340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9e6aa9ca754dc1b781eed7f61b1b6dd65fd5c8a4ed6f0f4275e3f8b45ff19dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6aa9ca754dc1b781eed7f61b1b6dd65fd5c8a4ed6f0f4275e3f8b45ff19dfe->enter($__internal_9e6aa9ca754dc1b781eed7f61b1b6dd65fd5c8a4ed6f0f4275e3f8b45ff19dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_97d873a225daada18af65eec084020a913d8297549ad57e5be34a1aea499340f->leave($__internal_97d873a225daada18af65eec084020a913d8297549ad57e5be34a1aea499340f_prof);

        
        $__internal_9e6aa9ca754dc1b781eed7f61b1b6dd65fd5c8a4ed6f0f4275e3f8b45ff19dfe->leave($__internal_9e6aa9ca754dc1b781eed7f61b1b6dd65fd5c8a4ed6f0f4275e3f8b45ff19dfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
